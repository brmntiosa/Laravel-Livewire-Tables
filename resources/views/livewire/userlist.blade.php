<div>
    <table class="table table-striped">
        <h1>Table Users</h1>
        <div class="row">
            <div class="col-md-3">
        <input wire:model.live="search" type="text" class="form-control">
            </div>
        </div>
        <thead>

            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
          </tr>
     </thead>
     <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
            </tr>
        @endforeach
     </tbody>


      </table>
      <div class="row">
        <div class="col-md-1">
            <select wire:model.live='per_page' name="" id="" class="form-select">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="75">75</option>
                <option value="100">100</option>
            </select>
        </div>
        <div class="col-md-11">

            {{$users->links('pagination::bootstrap-5')}}
        </div>

      </div>
</div>
