<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use PDF;

class ReportController extends Controller
{
    public function report1($pid)
    {
        $payment = Payment::find($pid);

        if (!$payment) {
            return abort(404, 'Pembayaran tidak ditemukan');
        }

        $enrollment = $payment->enrollment;

        if (!$enrollment) {
            return abort(404, 'Pendaftaran tidak ditemukan untuk pembayaran ini');
        }

        $student = $enrollment->student;
        $batch = $enrollment->batch;
        $course = $batch ? $batch->course : null;

        $html = "
        <div style='font-family: Arial, sans-serif; margin: 20px; padding: 20px; border: 1px solid #eee; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);'>
            <div style='background-color: #4CAF50; padding: 20px; border-radius: 10px 10px 0 0;'>
                <h1 style='text-align: center; color: #fff; font-size: 24px; margin: 0;'>Bukti Pembayaran</h1>
            </div>
            <div style='padding: 20px;'>
                <p style='font-size: 14px; color: #333; line-height: 1.5;'><strong>Nomor Bukti:</strong> {$pid}</p>
                <p style='font-size: 14px; color: #333; line-height: 1.5;'><strong>Tanggal:</strong> {$payment->paid_date}</p>
                <p style='font-size: 14px; color: #333; line-height: 1.5;'><strong>Nomor Pendaftaran:</strong> " . ($enrollment->enroll_no ?? 'N/A') . "</p>
                <p style='font-size: 14px; color: #333; line-height: 1.5;'><strong>Nama Siswa:</strong> " . ($student->name ?? 'N/A') . "</p>
                <hr style='border: 1px solid #eee; margin: 20px 0;'/>
                <table style='width: 100%; border-collapse: collapse; margin-bottom: 20px;'>
                    <thead>
                        <tr style='background-color: #f2f2f2;'>
                            <th style='text-align: left; padding: 10px; border-bottom: 2px solid #4CAF50; font-size: 14px; color: #333;'>Batch</th>
                            <th style='text-align: left; padding: 10px; border-bottom: 2px solid #4CAF50; font-size: 14px; color: #333;'>Course</th>
                            <th style='text-align: left; padding: 10px; border-bottom: 2px solid #4CAF50; font-size: 14px; color: #333;'>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style='padding: 10px; font-size: 14px; color: #333; background-color: #f9f9f9;'><h3 style='margin: 0;'>" . ($batch->name ?? 'N/A') . "</h3></td>
                            <td style='padding: 10px; font-size: 14px; color: #333; background-color: #f9f9f9;'><h3 style='margin: 0;'>" . ($course->name ?? 'N/A') . "</h3></td>
                            <td style='padding: 10px; font-size: 14px; color: #333; background-color: #f9f9f9;'><h3 style='margin: 0;'>" . $payment->amount . "</h3></td>
                        </tr>
                    </tbody>
                </table>
                <hr style='border: 1px solid #eee; margin-bottom: 20px;'/>
                <p style='text-align: right; font-size: 12px; color: #999;'><strong>Tanggal Cetak:</strong> " . date('Y-m-d') . "</p>
            </div>
        </div>";

        $pdf = PDF::loadHTML($html);

        return $pdf->stream('bukti_pembayaran.pdf');
    }
}
