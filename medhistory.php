<!DOCTYPE html>
<html>
<link href="medhis.css" rel="stylesheet">

<body>

    <h1>QUESTIONAIRE</h1>
    <p>This questionaire is used by your dentist to treat you safely.Please answer the questions as correct as possible</p>

    <form action="med.php" method="POST">
        <p>High blood Pressure</p>
        <input type="radio" id="bp" name="bp" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="bp" name="bp" value="no">
        <label for="no">No</label><br>

        <br>
        <p>Heart Disease</p>
        <input type="radio" id="heart" name="heart" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="heart" name="heart" value="no">
        <label for="no">No</label><br>

        <br>
        <p>Asthama</p>
        <input type="radio" id="asthama" name="asthama" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="asthama" name="asthama" value="no">
        <label for="no">No</label><br>

        <br>
        <p>Diabetes</p>
        <input type="radio" id="diabetes" name="diabetes" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="diabetes" name="diabetes" value="no">
        <label for="no">No</label><br>

        <br>
        <p>Hepatitis/Jaundice</p>
        <input type="radio" id="jaundice" name="jaundice" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="jaundice" name="jaundice" value="no">
        <label for="no">No</label><br>

        <br>
        <p>Epilepsy</p>
        <input type="radio" id="epilepsy" name="epilepsy" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="epilepsy" name="epilepsy" value="no">
        <label for="no">No</label><br>

        <br>
        <p>Any Allergies to Specific drugs</p>
        <input type="radio" id="allergy" name="allergy" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="allergy" name="allergy" value="no">
        <label for="no">No</label><br>

        <br>
        <p>Bleeding Disorder</p>
        <input type="radio" id="bleed" name="bleed" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="bleed" name="bleed" value="no">
        <label for="no">No</label><br>

        <br>
        <p>Thyroid</p>
        <input type="radio" id="thyroid" name="thyroid" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="thyroid" name="thyroid" value="no">
        <label for="no">No</label><br>

        <br>
        <p>Liver Disease</p>
        <input type="radio" id="liver" name="liver" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="liver" name="liver" value="no">
        <label for="no">No</label><br>

        <br>
        <p>Cancer Related</p>
        <input type="radio" id="cancer" name="cancer" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="cancer" name="cancer" value="no">
        <label for="no">No</label><br>

        <br>
        <p>AIDS/HIV</p>
        <input type="radio" id="aids" name="aids" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="aids" name="aids" value="no">
        <label for="no">No</label><br>

        <br>
        <p>TOBACCO/ALCOHOL</p>
        <input type="radio" id="alcohol" name="alcohol" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="alcohol" name="alcohol" value="no">
        <label for="no">No</label><br>

        <br>
        <p>Any other medical History</p>
        <input type="radio" id="other" name="other" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="other" name="other" value="no">
        <label for="no">No</label><br>

        <br>


        <input type="submit" value="Submit">
    </form>

</body>

</html>