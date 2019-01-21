<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.todos.table.title') }}</th>
                <th>{{ __('labels.backend.todos.table.description') }}</th>
                <th>{{ __('labels.backend.todos.table.deadline') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($todos as $todo)
        <tr>
             
                <td>{{  $todo->title }}</td>  
                <td>{{  $todo->description }}</td>  
                <td>{{  $todo->deadline }}</td>  
                

               <td>{!! $todo->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>