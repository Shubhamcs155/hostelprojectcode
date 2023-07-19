<?php
    session_start();
    include "add_db.php";
    if(isset($_GET['hsttal'])){
        $kp = $_GET['hsttal'];
        if (isset($_SESSION['gender'])) {
            $temp = $_SESSION['gender'];
            $query = "select tp,slots,hname,id,hstaddress,rent from hostels where hsttal='$kp' and tp='$temp' and approved=1;";
        }else {
            $query = "select tp,slots,hname,id,hstaddress,rent from hostels where hsttal='$kp' and approved=1";
        }
        
        $result = mysqli_query($conn,$query);
        if($result){
            echo '<table style="width: 100%;">
            <tr class="brd">
                <th class="sno" style="width: 10%;">Sr. No.</th>
                <th class="det" style="width: 50%;">Details</th>
                <th class="typ" style="width: 10%;">Type</th>
                <th class="typ" style="width: 10%;">Avl Slots</th>
                <th class="typ" style="width: 10%;">Applications Received</th>
                <th class="bk" style="width: 10%;">Action</th>
            </tr>';
            $ind = 1;
            $c = "h8";
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $query = "select totreq,appreq,rejreq from reqcount where hid='$id'";
                $rs = mysqli_query($conn,$query);
                $rw = mysqli_fetch_assoc($rs);
                echo '<tr class=" brd">
                <td class="sno" style="width: 10%;">'.$ind.'</td>
                <td class="det" style="width: 50%;">
                    <span id="h8">'.$row['hname'].'</span><br>
                    <span>Rent : '.$row['rent'].'</span><br>
                    <span>Address : '.$row["hstaddress"].'</span><br>
                    <button value="'.$row['id'].'" onclick="fn(this.value)">view more</button>
                </td>
                <td class="typ" style="width: 10%;">'.$row['tp'].'</td>
                <td class="slt" style="width: 10%;">'.$row['slots'].'</td>';
                if (mysqli_num_rows($rs)==0) {
                    echo '<td class="slt" style="width: 10%;">0</td> ';
                } else {
                    echo '<td class="slt" style="width: 10%;">'.($rw['totreq'] - ($rw['appreq']+$rw['rejreq'])).'</td> ';
                }   
                
                echo '<td class="bk" style="width: 10%;"><button class="btn btn-primary btn-sm" onclick="sentrq('.$row['id'].')">Apply</button></td>
            </tr>';
            $ind += 1;
            }


            echo '</table>';
        }else{
            echo mysqli_error();
        }
    }else{
        if(isset($_GET['hstpin'])){
            $kp = intval($_GET['hstpin']);
            if (isset($_SESSION['gender'])) {
                $temp = $_SESSION['gender'];
                $query = "select tp,slots,hname,id,hstaddress,rent from hostels where hstpin='$kp' and tp='$temp' and approved=1";
            }else{
                $query = "select tp,slots,hname,id,hstaddress,rent from hostels where hstpin='$kp' and approved=1";
            }
            
            $result = mysqli_query($conn,$query);
            if($result){
                echo '<table style="width: 100%;">
                <tr class="brd">
                    <th class="sno" style="width: 10%;">Sr. No.</th>
                    <th class="det" style="width: 50%;">Details</th>
                    <th class="typ" style="width: 10%;">Type</th>
                    <th class="typ" style="width: 10%;">Avl Slots</th>
                    <th class="typ" style="width: 10%;">Applications Received</th>
                    <th class="bk" style="width: 10%;">Action</th>
                </tr>';
                $ind = 1;
                $c = "h8";
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $query = "select totreq,appreq,rejreq from reqcount where hid='$id'";
                    $rs = mysqli_query($conn,$query);
                    $rw = mysqli_fetch_assoc($rs);
                    echo '<tr class=" brd">
                    <td class="sno" style="width: 10%;">'.$ind.'</td>
                    <td class="det" style="width: 50%;">
                        <span id="h8">'.$row['hname'].'</span><br>
                        <span>Rent : '.$row['rent'].'</span><br>
                        <span>Address : '.$row["hstaddress"].'</span><br>
                        <button value="'.$row['id'].'" onclick="fn(this.value)">view more</button>
                    </td>
                    <td class="typ" style="width: 10%;">'.$row['tp'].'</td>
                    <td class="slt" style="width: 10%;">'.$row['slots'].'</td>';
                    if (mysqli_num_rows($rs)==0) {
                        echo '<td class="slt" style="width: 10%;">0</td> ';
                    } else {
                        echo '<td class="slt" style="width: 10%;">'.($rw['totreq'] - ($rw['appreq']+$rw['rejreq'])).'</td> ';
                    }   
                    
                    echo '<td class="bk" style="width: 10%;"><button class="btn btn-primary btn-sm" onclick="sentrq('.$row['id'].')">Apply</button></td>
                    
                </tr>';
                $ind += 1;
                } 
    
                echo '</table>';
            }else{
                echo mysqli_error();
            }
    }
}
?>