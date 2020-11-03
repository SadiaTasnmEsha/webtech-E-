<html>
<body>

<h1>Form 1</h1>
<form action="show_data.php" method="get">
  Name: <input type="text" name="name">
  <input type="submit" name="submit" value="submit"> <br>
  
  
  Email: <input type="text" name="email">
  <input type="submit" name="submit" value="submit"> <br>

  Date of Birth :
  dd

   <select name="dd">
    <option value="01">1</option>
    <option value="02">2</option>
    <option value="03">3</option>
    <option value="04">4</option>
    
  </select>

 

  mm

  <select name="mm">
    <option value="01">Jan</option>
    <option value="02">Feb</option>
    <option value="03">March</option>
    <option value="04">April</option>
    
  </select>
  

  yyy

  <select name="yyy">
    <option value="01">1996</option>
    <option value="02">1997</option>
    <option value="03">1999</option>
    <option value="04">2000</option>
    
  </select>

  

  <input type="submit" name="submit" value="submit"> <br>


  Gender: <input type="radio" name="gender" value="Male">Male
  <input type="radio" name="gender" value="Female">female
  <input type="radio" name="gender" value="Other">other
  <input type="submit" name="submit" value="submit"> <br>

   DEGREE:
  <input type="checkbox" id="ssc" name="cb[]" />SSC
  <input type="checkbox" id="hsc" name="cb[]"/> HSC
  <input type="checkbox" id="bsc" name="cb[]"/>BSC
  <input type="checkbox" id="msc" name="cb[]"/>MSC
  
  

  <input type="submit" name="submit" value="submit"> <br>



<label> Blood Group : </label>
  <select name="select_box">
       <option value=""></option>  
        <option value="a">A+</option>
        <option value="aa">A-</option>
        <option value="ab">AB+</option>
         <option value="o">O+</option>
    </select>
    

    <input type="submit" name="submit" value="submit"> <br>

          

</form>

</body>
</html>