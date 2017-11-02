<!-- resources/views/books.blade.php -->

@extends('layouts.app')

@section('content')
    
    
    <div class="row">
        <div class="col-md-12">

        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        
        <!-- 本更新フォーム -->
        <form action="{{ url('books/update') }}" method="POST" class="form-horizontal">
            
            <!-- 本のタイトル -->
            <div class="form-group">
                <label for="book" class="col-sm-3 control-label">Book</label>
                
                <div class="col-sm-6">
                    <input type="text" name="item_name" id="book-name"class="form-control" value="{{$book->item_name}}">
                </div>
            </div>
 
             <!-- 本の冊数 -->
            <div class="form-group">
                <label for="book-number" class="col-sm-3 control-label">在庫数</label>
                
                <div class="col-sm-6">
                    <input type="text" name="item_number" id="book-number"class="form-control" value="{{$book->item_number}}">
                </div>
            </div>
 
             <!-- 本の金額 -->
            <div class="form-group">
                <label for="book-amount" class="col-sm-3 control-label">金額</label>
                
                <div class="col-sm-6">
                    <input type="text" name="item_amount" id="book-amount"class="form-control" value="{{$book->item_amount}}">
                </div>
            </div>
 
              <!-- 本の公開日 -->
            <div class="form-group">
                <label for="book-published" class="col-sm-3 control-label">公開日</label>
                
                <div class="col-sm-6">
                    <input type="date" name="published" id="book-published"class="form-control" value="{{$book->published}}">
                </div>
            </div>
        </div>
     </div>           
            <!-- 本 save/backボタン -->
            <div class="well well-sm ">
                <div class="row">
                    <div class="col-sm-offset-3 col-sm-3">
                    <button type="submit" class="btn btn-default ">Save
                    </button>
                
                    <a  class="btn btn-default" href="{{url('/')}}">
                    <i class="glyphicon glyphicon-plus"></i> Back
                    </a>
                    </div>
                </div>
          </div>
          <input type="hidden" name="id" value="{{$book->id}}" > 
          {{csrf_field()}}
        </form>
        


@endsection




