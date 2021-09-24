
@extends('layouts.default')
<style>
/*更新*/
.update {
  border: 2px solid #f49c65;
  color: #f49c65;
  padding: 10px 15px;
  border-radius: 5px;
  font-size: 13px;
  font-weight: bold;
  background-color: #fff;
}

.update:hover {
  background-color: #f49c65;
  color: #fff;
}

</style>
@section('title', 'edit.blade.php')


@section('content')

@foreach ($items as $item)

<table>
  @foreach ($items as $item)
  <tr>
    <!--日付-->
    <form action="/" method="get">
    @csrf
    <td><!--日付埋め込む--></td>

<!--タスク入力結果-->

    <td><input class="task-space" type="text" name="content" value="{{$item->content}}"></td>

<!--更新ボタン-->

    <td><input class="update" type="submit" name="update" value="更新"> </td>

<!--削除ボタン-->

    <td><input class="delete" type="submit"  value="削除"></td>

  </tr>
@endforeach

</table>
@endforeach