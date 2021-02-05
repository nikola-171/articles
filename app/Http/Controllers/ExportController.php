<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ArticleExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Article;


class ExportController extends Controller
{
    
    public function export_csv()
    {
        return Excel::download(new ArticleExport, 'articles.csv'); 
    }
}
