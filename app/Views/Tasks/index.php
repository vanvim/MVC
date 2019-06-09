<h1>Tasks</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
            <a href="/mvc2/tasks/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new task</a>
            <tr>
                <th>ID</th>
                <th>số báo danh</th>
                <th>hoc tên</th>
                <th>địa chỉ</th>
                <th>ưu tiên</th>
                <th>mã khối</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <?php
        foreach ($tasks as $task)
        {
            echo '<tr>';
            echo "<td>" . $task['id'] . "</td>";
            echo "<td>" . $task['sbd'] . "</td>";
            echo "<td>" . $task['hoten'] . "</td>";
            echo "<td>" . $task['diachi'] . "</td>";
            echo "<td>" . $task['uutien'] . "</td>";
            echo "<td>" . $task['makhoi'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/MVC2/tasks/edit/" . $task["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/mvc2/tasks/delete/" . $task["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>