<div style="margin: 20px;">
    <h2 style="text-align: center; font-family: Arial, sans-serif;">Add Patient Information</h2>

    <form action="/create" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token()?>">

        
        <div style="margin-bottom: 20px;">
            <label for="patientName" style="font-weight: bold;">Name</label>
            <input type="text" name="patientName" id="patientName" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
        </div>

        
        <div style="margin-bottom: 20px;">
            <label for="patientAge" style="font-weight: bold;">Age</label>
            <input type="number" name="patientAge" id="patientAge" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
        </div>

        
        <div style="margin-bottom: 20px;">
            <label for="patientAddress" style="font-weight: bold;">Address</label>
            <input type="text" name="patientAddress" id="patientAddress" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
        </div>

        
        <div style="margin-bottom: 20px;">
            <label style="font-weight: bold;">Sex</label>
            <div>
                <input type="radio" name="patientSex" value="Male" id="Male" required> Male
                <input type="radio" name="patientSex" value="Female" id="Female" required> Female
            </div>
        </div>

        
        <div style="text-align: center; margin-bottom: 20px;">
            <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Add Patient</button>
        </div>
    </form>

    
    <div style="text-align: center;">
        <span style="font-size: 16px;">Click <a href="/view" style="color: #4CAF50; font-weight: bold;">here</a> to view patients</span>
    </div>
</div>
