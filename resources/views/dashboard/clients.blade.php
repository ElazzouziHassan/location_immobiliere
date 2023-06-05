@extends('dashboard.layout')
@section('content')
<div class="table-responsive">
  <table class="table" style="margin-top: 1rem">
      <thead>
        <tr>
          <th>#</th>
          <th>CIN</th>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>MO1865</td>
          <td>El azzouzi</td>
          <td>Hassan</td>
          <td>
            <a href="#" title="Edit Student">
              <button class="btn btn-primary btn-sm">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                Edit
              </button>
            </a>
            <form method="POST" action="#" accept-charset="UTF-8" style="display:inline">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}
              <button type="submit" class="btn btn-danger btn-sm" title="Delete client" onclick="return confirm('Confirm delete?')">
                <i class="fa fa-trash-o" aria-hidden="true"></i> 
                Delete
              </button>

          </form>
          </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>1</td>
          <td>MO1865</td>
          <td>El azzouzi</td>
          <td>Hassan</td>
          <td>
            <a href="#" title="Edit Student">
              <button class="btn btn-primary btn-sm">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                Edit
              </button>
            </a>
            <form method="POST" action="#" accept-charset="UTF-8" style="display:inline">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}
              <button type="submit" class="btn btn-danger btn-sm" title="Delete client" onclick="return confirm('Confirm delete?')">
                <i class="fa fa-trash-o" aria-hidden="true"></i> 
                Delete
              </button>

          </form>
          </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>{{ 1 }}</td>
          <td>{{ 'MO1865' }}</td>
          <td>{{ 'El azzouzi' }}</td>
          <td>{{ 'Hassan' }}</td>
          <td>
            <a href="#" title="Edit Student">
              <button class="btn btn-primary btn-sm">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                Edit
              </button>
            </a>
            <form method="POST" action="#" accept-charset="UTF-8" style="display:inline">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}
              <button type="submit" class="btn btn-danger btn-sm" title="Delete client" onclick="return confirm('Confirm delete?')">
                <i class="fa fa-trash-o" aria-hidden="true"></i> 
                Delete
              </button>

          </form>
          </td>
        </tr>
      </tbody>
  </table>
</div> 
@stop