<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagination;


class PaginationController extends Controller
{
    public function index(){
        $data = Pagination::paginate(100);
        return view('pagination',compact('data'));
    }
}
