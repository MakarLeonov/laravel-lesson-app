<?php

namespace App\Http\Controllers;

use App\Models\Phonebook;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        // получаем все записи из таблицы/модели Phonebook
        // $users = Phonebook::all();
        // dd($users); // выводим на экран список всех записей в удобном для чтения формате

        // получаем отсортированный (asc) по полю name список записей из бд
        // $users = Phonebook::orderBy('name')->get();

        // получаем отсортированный (desc) по полю name список из 10 записей из бд
        // $users = Phonebook::orderBy('name', 'desc')->paginate(10);

        
        $users = Phonebook::orderBy('id')->paginate(10);

        // отправляем в компонент home полученный список записей
        return view('home', compact('users'));
    }
}
