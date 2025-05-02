<div style="margin: 20px;">
    <h2 style="text-align: center; font-family: Arial, sans-serif;">Edit Patient Information</h2>

    <form action="/edit/{{$patient[0]->id}}" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token()?>">

 
        <div style="margin-bottom: 20px;">
            <label for="patientName" style="font-weight: bold;">Name</label>
            <input type="text" name="patientName" id="patientName" value="{{$patient[0]->name}}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>


        <div style="margin-bottom: 20px;">
            <label for="patientAge" style="font-weight: bold;">Age</label>
            <input type="number" name="patientAge" id="patientAge" value="{{$patient[0]->age}}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 20px;">
            <label for="patientAddress" style="font-weight: bold;">Address</label>
            <input type="text" name="patientAddress" id="patientAddress" value="{{$patient[0]->address}}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
        </div>


        <div style="margin-bottom: 20px;">
            <label style="font-weight: bold;">Sex</label>
            <div>
                @if($patient[0]->sex == "Male")
                    <input type="radio" name="patientSex" value="male" checked> Male
                    <input type="radio" name="patientSex" value="female"> Female
                @elseif($patient[0]->sex == "Female")
                    <input type="radio" name="patientSex" value="male"> Male
                    <input type="radio" name="patientSex" value="female" checked> Female
                @endif
            </div>
        </div>

  
        <div style="text-align: center; margin-bottom: 20px;">
            <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Update Patient</button>
        </div>
    </form>


    <div style="text-align: center;">
        <span style="font-size: 16px;">Click <a href="/view" style="color: #4CAF50; font-weight: bold;">here</a> to go back</span>
    </div>
</div>
