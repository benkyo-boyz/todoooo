@extends('app')

  @section('content')
      <h2>編集</h2>
      {!! Form::open() !!}
          <div>
              <label>タイトル</label>
              {!! Form::input('text', 'title', $article->title, ['required', 'class' => 'form-control']) !!}
          </div>
          <div >
              <label>本文</label>
              {!! Form::textarea('body', $article->body , ['required', 'class' => 'form-control','size' => '25x3']) !!}
          </div>
      <button onclick="location.href='/articles/create'" style="z-index:100;"class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
          
          投稿</button>
      {!! Form::close() !!}
  @endsection