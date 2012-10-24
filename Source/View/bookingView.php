<div class="title">Equipment Booking Form </div>
<form class="form" method="post" action="/Controller/makeBooking.php">

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" 
           required placeholder="e.g Joe Bloggs."/><br />

    <label for="department">Department:</label>
    <input type="text" name="department" id="department" 
           required placeholder="e.g IT."/> <br />     

    <label for="email">E-Mail:</label>
    <input type="email" name="email" id="email" 
           required placeholder="e.g itsupport@thelowry.com."/><br />

    <label for="datefrom">Date From:</label>
    <input type="date" name="datefrom" id="datefrom" required/><br />  

    <label for="dateto">Date To:</label>   
    <input type="date" name="dateto" id="dateto" required/><br />   

    <label for="equiment">Equipment:</label>
    <div class="listholder">
        <div class="list">
            <input class="checkbox" type="checkbox" name="chk_group[]" 
                   value="MacBook Pro" />Macbook Pro<br />
            <input class="checkbox" type="checkbox" name="chk_group[]" 
                   value="MacBook" />Macbook<br />
            <input class="checkbox" type="checkbox" name="chk_group[]" 
                   value="VGA Adaptor" />Apple VGA Adaptor<br />
            <input class="checkbox" type="checkbox" name="chk_group[]" 
                   value="Video Camera" />Video Camera<br />
        </div>
         <div class="list">
            <input class="checkbox" type="checkbox" name="chk_group[]" 
                   value="Still Camera" />Digital Camera<br />
            <input class="checkbox" type="checkbox" name="chk_group[]" 
                   value="Conference Phone" />Conference Phone<br />
            <input class="checkbox" type="checkbox" name="chk_group[]" 
                   value="iPad" />iPad<br />
            <input class="checkbox" type="checkbox" name="chk_group[]" 
                   value="iPod" />iPod<br />
        </div>
    </div>
    <label for="reason">Reason:</label>                
    <textarea name="reason" 
              required placeholder="e.g For a meeting."></textarea>

    <div class="submit">
        <input class="submit" type="submit" value="Submit" />
    </div>
</form>