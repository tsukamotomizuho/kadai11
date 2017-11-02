<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Book;
use Illuminate\Http\Request; 

/**
* 本のダッシュボード表示  */
// Bookテーブル取得⇒代入$books⇒'$books'ファイルにわたす
Route::get('/', function () {
    $books = Book::orderBy('created_at', 'asc')->get();
    return view('books', [
        'books' => $books
    ]);
});

/**
* 新「本」を追加 */
Route::post('/books', function (Request $request) {
    //バリデーション
    $validator = Validator::make($request->all(), [
            'item_name'   => 'required|min:3|max:255',
            'item_number' => 'required|min:1|max:3',
            'item_amount' => 'required|max:6',
            'published'   => 'required',
    ]);
    //バリデーション:エラー
    if ($validator->fails()) {
            return redirect('/')->withInput()->withErrors($validator);
    }
    // Eloquent モデル
    $books = new Book;
    $books->item_name   = $request->item_name;
    $books->item_number = $request->item_number;
    $books->item_amount = $request->item_amount;
    $books->published   = $request->published;
    $books->save();   //「/」ルートにリダイレクト 
    return redirect('/');
});

/**
* 本を削除 */
Route::post('/books/delete/{book}', function (Book $book) {
    $book->delete();
    return redirect('/');
});

/**
* 本を更新 */
Route::post('/booksedit/{books}', function (Book $books) {
    //受け取ったbooks(id)から　Bookモデルに対応するテーブルからidが一致するレコードを取得
        return view('booksedit', ['book' => $books]);
    //['ビュー側使用する変数名' => $ + 値（変数/配列/オブジェクト）]
});

/**
* 本を更新 */
Route::post('/books/update', function (Request $request) {
    //バリデーション
    $validator = Validator::make($request->all(), [
            'item_name'   => 'required|min:3|max:255',
            'item_number' => 'required|min:1|max:3',
            'item_amount' => 'required|max:6',
            'published'   => 'required',
    ]);
    //バリデーション:エラー
    if ($validator->fails()) {
            return redirect('/')->withInput()->withErrors($validator);
    }

    // Eloquent モデル
    $books = Book::find($request->id);
    $books->item_name   = $request->item_name;
    $books->item_number = $request->item_number;
    $books->item_amount = $request->item_amount;
    $books->published   = $request->published;
    $books->save();   //「/」ルートにリダイレクト 
    return redirect('/');
});

?>