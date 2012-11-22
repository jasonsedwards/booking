<div class="page-header"><h1>Equipment Booking Form</h1></div>
<form class="form-horizontal" method="post" action="/Controller/makeBooking.php">

     <div class="control-group">
            <label class="control-label" for="name">Name</label>
        <div class="controls">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-pencil"></i></span>
                <input class="input-xlarge" type="text" name="name" id="name" required placeholder="e.g Joe Bloggs."/> <br />   
            </div>
        </div>
    </div> 

     <div class="control-group">
            <label class="control-label" for="department">Department</label>
        <div class="controls">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-pencil"></i></span>
                <input class="input-xlarge" type="text" name="department" id="department" required placeholder="e.g IT."/> <br />   
            </div>
        </div>
    </div> 
    
    <div class="control-group">
            <label class="control-label" for="email">Email address</label>
        <div class="controls">
            <div class="input-prepend">  
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input class="input-xlarge" type="email" name="email" id="email" required placeholder="e.g itsupport@thelowry.com.">
            </div>
        </div>
    </div> 

    <div class="control-group">
        <label class="control-label" for="datefrom">Date From</label>
        <div class="controls">
            <div class="input-prepend">  
                <span class="add-on"><i class="icon-calendar"></i></span>
                <input class="input-xlarge" type="date" name="datefrom" id="datefrom">
            </div>
        </div>
    </div> 

    <div class="control-group">
        <label class="control-label" for="dateto">Date To</label>
        <div class="controls">
            <div class="input-prepend">  
                <span class="add-on"><i class="icon-calendar"></i></span>
                <input class="input-xlarge" type="date" name="dateto" id="dateto">
            </div>
        </div>
    </div>  


    <div class="control-group">
        <label class="control-label" for="equiment">Equipment:</label>
        <div class="controls">
            <label class="checkbox inline">
                <input type="checkbox" name="chk_group[]" value="MacBook Pro" /> Macbook Pro
            </label>
            <label class="checkbox inline">
                <input type="checkbox" name="chk_group[]" value="MacBook" /> Macbook
            </label>
            <label class="checkbox inline">
                <input type="checkbox" name="chk_group[]" value="VGA Adaptor" /> Apple VGA Adaptor
            </label>
        </div>
        <div class="controls">
            <label class="checkbox inline">
                <input type="checkbox" name="chk_group[]" value="Video Camera" /> Video Camera
            </label>
            <label class="checkbox inline">
                <input type="checkbox" name="chk_group[]" value="Still Camera" /> Digital Camera
            </label>
        </div>
        <div class="controls">
            <label class="checkbox inline">
                <input type="checkbox" name="chk_group[]" value="Conference Phone" /> Conference Phone
            </label>
        </div>
        <div class="controls">
            <label class="checkbox inline">
                <input type="checkbox" name="chk_group[]" value="iPad" /> iPad
            </label>
            <label class="checkbox inline">
                <input type="checkbox" name="chk_group[]" value="iPod" /> iPod           
            </label>
        </div>
    </div>    
    
    <div class="control-group">
        <label class="control-label" for="reason">Reason</label>
        <div class="controls">
            <div class="input-prepend">  
                <span class="add-on"><i class="icon-pencil"></i></span>
                <textarea class="input-xlarge" rows ="6" name="reason" required placeholder="e.g For a meeting."></textarea>
            </div>
        </div>
    </div>      
    <div class="control-group">
    <div class="controls">
        <input class="btn btn-primary" type="submit" value="Submit" />
    </div>
    </div>
</form>