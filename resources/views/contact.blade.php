<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
    table.gridtable {
        font-family: verdana, arial, sans-serif;
        font-size: 11px;
        color: #333333;
        border-width: 1px;
        border-color: #666666;
        border-collapse: collapse;
        width: 70%;
    }
    
    table.gridtable th {
        padding: 20px;
        height: 50px;
        border-width: 1px;
        border-style: solid;
        border-color: #666666;
        background-color: #dedede;
    }
    
    table.gridtable td {
        padding: 20px;
        height: 25px;
        border-width: 1px;
        border-style: solid;
        border-color: #666666;
        background-color: #ffffff;
    }
    
    table.bill th {
        padding: 10px;
        border-width: 1px;
        border-style: solid;
        border-color: #666666;
        width: 20%;
    }
    
    table.bill {
        font-family: verdana, arial, sans-serif;
        font-size: 11px;
        color: #333333;
        border-width: 1px;
        border-color: #666666;
        border-collapse: collapse;
        width: 70%;
    }
    
    #parent {
        display: flex;
        background-color: lightblue;
    }
    
    #narrow {
        flex: 1;
        /* Just so it's visible */
    }
    
    #wide {
        flex: 1;
        /* Grow to rest of container */
        /* Just so it's visible */
    }
</style>
<!-- Table goes in the document BODY -->

<div style="margin-left:15%; ">
    <h5><strong>Dear Administrator,</strong></h5>
</div>
<div style="margin-left:15%; ">
    <h6><strong>Please check below details of customer.</strong></h6>
</div>


<div align="center">

    <table class="bill">
        <tr>
            <th>Name</th>
            <th>{{ name }}</th>
        </tr>
        <tr>
            <th>Email</th>
            <th>{{ email }}</th>
        </tr>
        <tr>
            <th>Contact</th>
            <th>{{ contact }}</th>
        </tr>
        <tr>
            <th>Subject</th>
            <th>{{ subject }}</th>
        </tr>
        <tr>
            <th>Messsage</th>
            <th>{{ message }}</th>
        </tr>
    </table>

</div>
<div style="margin-left:15%; ">
    <h5><strong>Comments by administrator:</strong></h5>
</div>
<div style="margin-left:15%; ">
    <h5><strong>Form Posted by IP: {{ ip }}</strong></h5>
</div>