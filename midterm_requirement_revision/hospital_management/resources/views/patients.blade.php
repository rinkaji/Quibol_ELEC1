
</style>
<div style="margin: 20px;">
    <h2 style="text-align: center; font-family: Arial, sans-serif;">Patient Information</h2>

    <div style="text-align: center; margin-bottom: 20px;">
        
        <form method="get" action="/view">
            <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
            <input type="text" name="search" placeholder="Search by Name, Address, or Sex" 
                   style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; width: 250px;">
            <button type="submit" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">
                Search
            </button>
            
        </form>
        <div style="display: flex; justify-content: flex-end; margin: 20px 0;">
            <a href="/insert" 
               style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; text-decoration: none; font-weight: bold;">
                Add New Patient
            </a>
        </div>
    </div>
    
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <thead>
            <tr style="background-color: #4CAF50; color: white;">
                <th style="padding: 8px; text-align: left;">#</th>
                <th style="padding: 8px; text-align: left;">Name</th>
                <th style="padding: 8px; text-align: left;">Age</th>
                <th style="padding: 8px; text-align: left;">Sex</th>
                <th style="padding: 8px; text-align: left;">Address</th>
                <th style="padding: 8px; text-align: left;">Date Created</th>
                <th style="padding: 8px; text-align: left;">Date Update</th>
                <th colspan="2" style="text-align: center; padding: 8px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
             $counter = 1;   
            @endphp
            @foreach($patients as $patient)
                <tr style="border-bottom: 1px solid #ddd;">
                    <td style="padding: 8px;">{{$counter++}}</td>
                    <td style="padding: 8px;">{{$patient->name}}</td>
                    <td style="padding: 8px;">{{$patient->age}}</td>
                    <td style="padding: 8px;">{{$patient->sex}}</td>
                    <td style="padding: 8px;">{{$patient->address}}</td>
                    <td style="padding: 8px;">{{$patient->created_at}}</td>
                    <td style="padding: 8px;">{{$patient->updated_at}}</td>
                    <td style="text-align: center;">
                        <a href="/edit/{{$patient->id}}" style="background-color: #4CAF50; color: white; padding: 6px 12px; text-decoration: none; border-radius: 4px;">Edit</a>
                        <a href="finding/{{$patient->id}}" style="background-color:rgb(57, 92, 222); color: white; padding: 6px 12px; text-decoration: none; border-radius: 4px;">View</a>
                        <a href="/delete/{{$patient->id}}" style="background-color: #f44336; color: white; padding: 6px 12px; text-decoration: none; border-radius: 4px;">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div style="text-align: center; margin-top: 20px;">
    <div class="pagination-container" style="display: inline-block;">
        <nav>
            <ul class="pagination" style="list-style-type: none; display: inline-flex; padding: 0;">
                
                <li class="page-item" style="margin: 0 5px;">
                    <a class="page-link" 
                       href="{{ $patients->previousPageUrl() ? $patients->previousPageUrl() . (request('search') ? '&search=' . request('search') : '') : '#' }}" 
                       style="color: #4CAF50; padding: 10px 15px; border: 1px solid #ddd; border-radius: 4px; text-decoration: none;">
                        &laquo; Previous
                    </a>
                </li>
                
                
                @foreach ($patients->getUrlRange(1, $patients->lastPage()) as $page => $url)
                    <li class="page-item" style="margin: 0 5px;">
                        <a class="page-link" href="{{ $url . (request('search') ? '&search=' . request('search') : '') }}" style="color: #4CAF50; padding: 10px 15px; border: 1px solid #ddd; border-radius: 4px; text-decoration: none;">
                            {{ $page }}
                        </a>
                    </li>
                @endforeach
                
                
                <li class="page-item" style="margin: 0 5px;">
                    <a class="page-link" 
                       href="{{ $patients->nextPageUrl() ? $patients->nextPageUrl() . (request('search') ? '&search=' . request('search') : '') : '#' }}" 
                       style="color: #4CAF50; padding: 10px 15px; border: 1px solid #ddd; border-radius: 4px; text-decoration: none;">
                        Next &raquo;
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
</div>

