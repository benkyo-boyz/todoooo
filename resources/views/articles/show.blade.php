@extends('app')

  @section('content')
      <h2>詳細</h2>
      <table >
          <tbody>
          <tr>
              <th>タイトル</th>
              <td>{{{ $article->title }}}</td>
          </tr>
          <tr>
              <th>本文</th>
              <td>{{{ $article->body }}}</td>
          </tr>
          <tr>
              <th>作成日時</th>
              <td>{{{ $article->created_at }}}</td>
          </tr>
          <tr>
              <th>更新日時</th>
              <td>{{{ $article->updated_at }}}</td>
          </tr>
          </tbody>
      </table>

  @endsection