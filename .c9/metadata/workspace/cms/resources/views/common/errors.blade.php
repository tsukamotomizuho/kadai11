{"filter":false,"title":"errors.blade.php","tooltip":"/cms/resources/views/common/errors.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":19,"column":0},"action":"insert","lines":["<!-- resources/views/common/errors.blade.php -->","","@if (count($errors) > 0)","    <!-- Form Error List -->","    <div class=\"alert alert-danger\">","        <div><strong>入力した文字を修正してください。</strong></div> ","        <div>","            <ul>","            @foreach ($errors->all() as $error)","                <li>{{ $error }}</li>","            @endforeach","            </ul>","        </div>","    </div>","@endif","","","","",""],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":19,"column":0},"end":{"row":19,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1509178832299,"hash":"498600aaf995495c0e02db6bba1f418e48218804"}