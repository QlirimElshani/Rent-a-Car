<?php include_once('includes/header.php'); ?>
<?php include_once('includes/sqlFunctions.php'); ?>
<div id="main">
    <div id="slide-bar">
        <div class="image">
            <h1>Rezervimet</h1>
        </div>
    </div>
    <div class="tabela">
        <h1>Rezervimet</h1>
        <table id="klientet_table">
            <tr>
                <th>Klienti</th>
                <th>Automjeti</th>
                <th>Data e rezervimit</th>
                <th>Data e kthimit</th>
                <th>Komente</th>
                <th>Modifiko</th>
                <th>Fshiej</th>
            </tr>
            <?php if (isset($_SESSION['klientiid'])) : ?>
                <tr>
                    <td>Argjend Llumnica</td>
                    <td>BMW</td>
                    <td>03/06/2020</td>
                    <td>10/06/2020</td>
                    <td>Test</td>
                    <td id="modifiko"><i class="fa fa-pencil-square-o"></i></td>
                    <td id="fshiej"><i class="fa fa-trash"></i></td>
                </tr>
                <tr>
                    <td>Florent Feta</td>
                    <td>Mercedes</td>
                    <td>03/06/2020</td>
                    <td>10/06/2020</td>
                    <td>Test</td>
                    <td id="modifiko"><i class="fa fa-pencil-square-o"></i></td>
                    <td id="fshiej"><i class="fa fa-trash"></i></td>
                </tr>
                <tr>
                    <td>Adriatik Nikqi</td>
                    <td>Golf V</td>
                    <td>03/06/2020</td>
                    <td>10/06/2020</td>
                    <td>Test</td>
                    <td id="modifiko"><i class="fa fa-pencil-square-o"></i></td>
                    <td id="fshiej"><i class="fa fa-trash"></i></td>
                </tr>
                <tr>
                    <td>Adriatik Nikqi</td>
                    <td>Golf V</td>
                    <td>03/06/2020</td>
                    <td>10/06/2020</td>
                    <td>Test</td>
                    <td id="modifiko"><i class="fa fa-pencil-square-o"></i></td>
                    <td id="fshiej"><i class="fa fa-trash"></i></td>
                </tr>
                <td>Florent Feta</td>
                <td>Mercedes</td>
                <td>03/06/2020</td>
                <td>10/06/2020</td>
                <td>Test</td>
                <td id="modifiko"><i class="fa fa-pencil-square-o"></i></td>
                <td id="fshiej"><i class="fa fa-trash"></i></td>
                </tr>
                <tr>
                    <td>Adriatik Nikqi</td>
                    <td>Golf V</td>
                    <td>03/06/2020</td>
                    <td>10/06/2020</td>
                    <td>Test</td>
                    <td id="modifiko"><i class="fa fa-pencil-square-o"></i></td>
                    <td id="fshiej"><i class="fa fa-trash"></i></td>
                </tr>
                <tr>
                    <td>Rilind Nikqi</td>
                    <td>Golf V</td>
                    <td>03/06/2020</td>
                    <td>10/06/2020</td>
                    <td>Test</td>
                    <td id="modifiko"><i class="fa fa-pencil-square-o"></i></td>
                    <td id="fshiej"><i class="fa fa-trash"></i></td>
                </tr>
                <tr>
                    <td>Florent Feta</td>
                    <td>Mercedes</td>
                    <td>03/06/2020</td>
                    <td>10/06/2020</td>
                    <td>Test</td>
                    <td id="modifiko"><i class="fa fa-pencil-square-o"></i></td>
                    <td id="fshiej"><i class="fa fa-trash"></i></td>
                </tr>
                <tr>
                    <td>Argjend Llumnica</td>
                    <td>BMW</td>
                    <td>08/04/2020</td>
                    <td>13/04/2020</td>
                    <td>Test</td>
                    <td id="modifiko"><i class="fa fa-pencil-square-o"></i></td>
                    <td id="fshiej"><i class="fa fa-trash"></i></td>
                </tr>
                <tr>
                    <td>Florent Feta</td>
                    <td>Mercedes</td>
                    <td>03/06/2020</td>
                    <td>10/06/2020</td>
                    <td>Test</td>
                    <td id="modifiko"><i class="fa fa-pencil-square-o"></i></td>
                    <td id="fshiej"><i class="fa fa-trash"></i></td>
                </tr>
            <?php else : ?>
                <?php $rezervimet = merrRezervimetId($_SESSION['klientiid']);
                while ($rezervimi = mysqli_fetch_assoc($rezervimet)) :
                ?>
                <tr>
                    <td><?php echo $rezervimi['klientiid']; ?></td>
                    <td><?php echo $rezervimi['emri']; ?></td>
                    <td><?php echo $rezervimi['data_e_rezervimit']; ?></td>
                    <td><?php echo $rezervimi['data_e_marrjes']; ?></td>
                    <td><?php echo $rezervimi['komente']; ?></td>
                    <td id="modifiko"><i class="fa fa-pencil-square-o"></i></td>
                    <td id="fshiej"><i class="fa fa-trash"></i></td>
                </tr>
                <?php endwhile; ?>
            <?php endif; ?>
        </table>
        <button id="shto_klient"><i class="fa fa-plus" aria-hidden="true"></i> Shto rezervim</button>
        <div style="clear: both;"></div>
    </div>
</div>
<hr>
<?php include_once('includes/footer.php'); ?>