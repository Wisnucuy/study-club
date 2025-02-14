<?php

use App\Http\Controllers\StudentController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\Student;


Route::get('/dashboard', function(){
    return view('welcome');
});

Route::get('/tampilan', function(){
    return view('tampilan');
});

// Route::get('/tampilan/{nilai}{nilai2}', function($nilai, $nilai2){
//     return view('tampilan', [
//         'nilai_1' => $nilai,    
//         'nilai_2' => $nilai2
//     ]);
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function(){
//     return view('welcome');
// });

// Route::get('/baru', function(){
//     return view('baru');
// });


// Route::get('/baru/{name}-{alamat}-{prodi}-{akt}', function($name, $alamat, $prodi, $akt){
//     return view('baru', [
//         'a' => $name,    
//         'b' => $alamat,
//         'v' => $prodi,
//         'd' => $akt

//     ]);
// });

// //baru
// Route::get('adudu/dashboard', function(){
//     return view(view:'adudu/dashboard');
// })->name('dashboard');

// Route::get('adudu/daftar', function(){
//     return view(view:'adudu/daftar');
// })->name('daftar');

// //ujian
// Route::get('/my/home', function(){
//     return view('ujian.home');
// })->name('my.home');

Route::get('/my/nama', function(){
    return view('ujian.nama');
})->name('my.nama');

// Route::get('/my/alamat', function(){
//     return view('ujian.alamat');
// })->name('my.alamat');

// Route::get('/my/prodi', function(){
//     return view('ujian.prodi');
// })->name('my.prodi');

// Route::get('/my/akt', function(){
//     return view('ujian.akt');
// })->name('my.akt');

// //menamopilkan data

// Route::get('/students', function(){
//     $students = Student::all();
//     return view("ujian.student", ["students" => $students]);
// });

// Route::get('/students/create', function(){
//     Student::create([
//         "nim" => "111",
//         "name" => "Ala",
//         "prodi" => "IT",
//         "angkatan" => 2024,
//         "alamat" => "bandung"
//     ]);
// });

// Route::get('/students/update/{id}', function($id){
//     Student::find($id)->update([
//         "nim" => "111",
//         "name" => "Ala",
//         "prodi" => "IT",
//         "angkatan" => 2024,
//         "alamat" => "bandung"
//     ]);
//     echo "data dengan id $id berhasil diupdate";
// });

// Route::get('/students/delete/{id}', function($id){
//     Student::find($id)->delete();
//     echo "data dengan id $id berhasil didelete";
// });



// //latihan
// Route::get('/products', function(){
//     $products = Product::all();
//     return view("ujian.product", ["products" => $products]);
// });

// Route::get('/products/create', function(){
//     Product::create([
//         "code" => rand(1, 4),
//         "name" => "barang bagus",
//         "description" => "Baru",
//         "quantity" => rand(20, 222),
//         "price" => rand(200, 300)
//     ]);
// });

// Route::get('/products/update/{id}', function($id){
//     Product::find($id)->update([
//         "code" => 5,
//         "name" => "produk baru",
//         "description" => "lebih versi baru",
//         "quantity" => 20,
//         "price" => rand(400,450),
//     ]);
//     echo "data dengan id $id berhasil diupdate";
// });

// Route::get('/products/delete/{id}', function($id){
//     Product::find($id)->delete([
//         "code" => 5,
//         "name" => "produk baru",
//         "description" => "lebih versi baru",
//         "quantity" => 20,
//         "price" => rand(400,450),
//     ]);
//     echo "data dengan id $id berhasil dihapus";
// });

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/student", StudentController::class);