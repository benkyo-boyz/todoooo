@extends('app')

  @section('content')
      <h2 >記事一覧</h2>
      
      <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
          <thead>
          <tr>
              <th>タイトル</th>
              <th>本文</th>
              <th>作成日時</th>
              <th>更新日時</th>
              <th></th>
              <th><button onclick="location.href='/articles/create'" style="position:absolute;top:-30px;left:0px;z-index:100;"class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
        投稿
      </button></th>
          </tr>
          </thead>
          <tbody>
          @foreach($articles as $article)
              <tr>
                   <td>{{{ $article->title }}}</td>
                   <td>{{{ $article->body }}}</td>
                   <td>{{{ $article->created_at }}}</td>
                   <td>{{{ $article->updated_at }}}</td>
                   <td><a href="/articles/show/{{{ $article->id }}}" >詳細</a>
                       <a href="/articles/edit/{{{ $article->id }}}" >編集</a></td>
                   <td>
                  {!! Form::open(['action' => ['ArticlesController@postDelete', $article->id]]) !!}
                    <button type="submit"   class="mdl-button mdl-js-button">削除</button>
                  {!! Form::close() !!}
                   </td>
              </tr>
          @endforeach
          </tbody>
      </table>
  @endsection