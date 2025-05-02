
    <div style="margin: 20px;">
        <h2 style="text-align: center; font-family: Arial, sans-serif;">Add Patient Findings</h2>
    
        <form action="{{url('finding/' . $id . '/store')}}" method="post">
            @csrf
            <div style="margin-bottom: 20px;">
                <label for="findings_by" style="font-weight: bold;">Find by</label>
                <input type="text" name="findings_by" id="findings_by" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
            </div>
            <div style="margin-bottom: 20px;">
                <label for="content" style="font-weight: bold;">Findings</label>
                <textarea name="content" id="content" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" rows="4" required></textarea>
            </div>        
            <div style="text-align: center; margin-bottom: 20px;">
                <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Add Findings</button>
            </div>
        </form>
        <div style="text-align: center;">
            <span style="font-size: 16px;">Click <a href="{{url('finding/' . $id)}}" style="color: #4CAF50; font-weight: bold;">here</a> to view findings</span>
        </div>
    </div>    