<div style="margin: 20px;">
    <h2 style="text-align: center; font-family: Arial, sans-serif;">Patient Findings</h2>

    <div style="text-align: center; margin-bottom: 20px;">
        <a href="{{ url('/view') }}" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; text-decoration: none;">View Patients</a>
        <a href="{{ url('finding/' . $id . '/create') }}" style="padding: 10px 20px; background-color: rgb(57, 92, 222); color: white; border: none; border-radius: 4px; text-decoration: none; margin-left: 10px;">Add Findings</a>
    </div>

    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <thead>
            <tr style="background-color: #4CAF50; color: white;">
                <th style="padding: 8px; text-align: left;">#</th>
                <th style="padding: 8px; text-align: left;">Name</th>
                <th style="padding: 8px; text-align: left;">Findings</th>
                <th style="padding: 8px; text-align: left;">Date Created</th>
                <th style="padding: 8px; text-align: left;">Date Updated</th>
                <th colspan="2" style="text-align: center; padding: 8px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
             $counter = 1;   
            @endphp
        @foreach($findings as $finding)
            <tr style="border-bottom: 1px solid #ddd;">
                <td style="padding: 8px;">{{ $counter++ }}</td>
                <td style="padding: 8px;">{{ $finding->findings_by }}</td>
                <td style="padding: 8px;">{{ $finding->content }}</td>
                <td style="padding: 8px;">{{ $finding->created_at }}</td>
                <td style="padding: 8px;">{{ $finding->updated_at }}</td>
                <td style="text-align: center;">
                    <a href="{{ route('finding.edit', ['id' => $id, 'findingId' => $finding->id]) }}"
                       style="background-color: #4CAF50; color: white; padding: 6px 12px; text-decoration: none; border-radius: 4px; margin-right: 5px;">
                        Edit
                    </a>
                    <form action="{{ route('finding.destroy', ['id' => $id, 'findingId' => $finding->id]) }}"
                          method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                onclick="return confirm('Are you sure you want to delete this finding?')"
                                style="background-color: #f44336; color: white; padding: 6px 12px; border: none; border-radius: 4px; cursor: pointer;">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
