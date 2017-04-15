
<form name="ticket" action="./pdf.php" method="post">
    <label>Lotnisko wylotu</label><br>
    <select name="departure">

        <?php
        for ($i = 0; $i < count($airports); $i++) {
            echo '<option value="' . $i . '">' . $airports[$i]['name'] . '</options>';
        }
        ?>

    </select><br>
    <label>Lotnisko przylotu</label><br>
    <select name="arrival">
        <?php
        for ($i = 0; $i < count($airports); $i++) {
            echo '<option value="' . $i . '">' . $airports[$i]['name'] . '</options>';
        }   
        ?>
    </select><br>
    <label>Czas startu</label><br>
    <input  type="datetime-local" name="startTime"><br>

    <label>Długość lotu w godzinach</label><br>
    <input name="lenght" type="number" min="0" step="1" placeholder="ilosc godzin"><br>
    <label>Cena lotu</label><br>
    <input name="price" type="number" min="0" step="0.01" placeholder="ilosc godzin"><br>

    <input type="submit" value="Zaloguj">

</form>
