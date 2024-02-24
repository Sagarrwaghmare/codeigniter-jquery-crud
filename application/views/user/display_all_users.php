<div class="container my-2">
    <!-- ALL Users -->
    <div class="updateModelContainer">
        <div class="updateModel">
            <h4>Update User</h4>
            <label for="">
                <input class="form-control" id="upid" type="text" disabled hidden>
            </label>
            <label for="">
                <input class="form-control" id="upname" type="text">
            </label>
            <label for="">
                <input class="form-control" id="upemail" type="text">
            </label>
            <label for="">
                <button class="btn btn-outline-success p-2" id="upbtn" data-id="">Update</button>
            </label>
        </div>
    </div>

    <div class="container userdatacontainer">

        <table class="container allUserTable" id="allUserTable">
            <!-- <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Operation</th>
        </thead>
        <?php
            foreach ($users as $key => $value) {
                echo user_container($value['id'],$value['name'],$value['email'],dateChanger($value['created_at']),dateChanger($value['updated_at']));
            }
            ?> -->
    </table>
    </div>




    
</div>