@extends('layouts.default')
<style>
/*背景*/

.background {
  background-color: #260d73;
  width: 100%;
  height: 100%;
  position: absolute;
}

/*メイン*/
.inner {
  width: 750px;
  border-radius: 12px;
  background-color: #fff;
  margin: 0 auto;
  position: relative;
  top: 25%;
  padding: 10px;
  box-shadow: #2f2f2e 2px 2px;
}

h2 {
  margin-left: 10px;
  padding: 10px;
}

/*追加*/
.writespace-block {
  height: 35px;
  border-radius: 5px;
  display: flex;
  justify-content: space-between;
  padding: 0 20px;
}
.create-text {
  width: 80%;
  height: 30px;
  border-radius: 5px;
  border: 1px solid rgb(195, 192, 192);
}

.create-button {
  border: 2px solid #df86f7;
  color: #df86f7;
  padding: 10px 15px;
  border-radius: 5px;
  font-size: 13px;
  font-weight: bold;
  margin-right: 20px;
  background-color: #fff;
}

.create-button:hover {
  background-color: #df86f7;
  color: #fff;
}
/*追加*/

/*タスク table*/
table {
  width: 100%;
  text-align: center;
  padding: 20px;
}

td {
  padding: 13px 5px;
}

/*作成日　タスク名　削除　更新*/
th {
  padding: 15px 10px 30px;
}

.task-space {
  width: 85%;
  height: 20px;
  border-radius: 5px;
  border: 1px solid rgb(195, 192, 192);
}

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
.delete {
  border: 2px solid #99f9ee;
  color: #99f9ee;
  padding: 10px 15px;
  border-radius: 5px;
  font-size: 13px;
  font-weight: bold;
  background-color: #fff;
}

.delete:hover {
  background-color: #99f9ee;
  color: #fff;
}
/*タスク table*/

</style>
@section('title', 'index.blade.php')

@section('content')

<form action="/" method="post">
    @csrf
 <input class="create-text" type="text" name="create">
<input class="create-button" type="submit" value="追加">

</form>


    <!--タスク-->
<table>
  <tr class="tasc-title-tr">
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>

  <tr>
    <form action="/" method="post">
    <td>2021-09-17 06:35:23</td>
    </form>
    <form action="/" method="post">
    <td><input class="task-space" type="text"></td>
    </form>
    <form action="/edit" method="post">
    <td><input class="update" type="submit"  value="更新"> </td>
    </form>
    <form action="/" method="post">
    <td><input class="delete" type="submit"  value="削除"></td>
    </form>
  </tr>


</table>
    <!--タスク-->


@endsection