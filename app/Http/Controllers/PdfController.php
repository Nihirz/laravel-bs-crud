<?php


namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function index(){
        $data = Category::get();
        $pdf = Pdf::loadView('pdf', compact('data'));
        return $pdf->download('invoice.pdf');
    }
}
