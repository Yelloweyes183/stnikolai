<?php

require_once 'setup.php';

$konzept = true;
$statistik = true;

ob_start() ?>

# Statistik

<hr>
<table class="stat">
<tr>
<th>&nbsp;</th>
    <th>Taufen</th>
    <th>Trauungen</th>
    <th>Beerdigungen</th>
    <th>Gäste</th>
    <th>Wiedereintritte *</th>
</tr>
<tr>
<th>2002</th>
    <td>23</td>
    <td>8</td>
    <td>21</td>
    <td>104 306</td>
    <td>4</td>  
</tr>
<tr>
<th>2003</th>
    <td>21</td>
    <td>10</td>
    <td>24</td>
    <td>118 602</td>
    <td>6</td>  
</tr>
<tr>
<th>2004</th>
    <td>31</td>
    <td>11</td>
    <td>20</td>
    <td>140 437</td>
    <td>38</td>  
</tr>
<tr>
<th>2005</th>
    <td>30</td>
    <td>11</td>
    <td>33</td>
    <td>144 170</td>
    <td>53</td>  
</tr>
<tr>
<th>2006</th>
    <td>28</td>
    <td>16</td>
    <td>22</td>
    <td>161 334</td>
    <td>54</td>  
</tr>
<tr>
<th>2007</th>
    <td>25</td>
    <td>17</td>
    <td>16</td>
    <td>173 237</td>
    <td>62</td>  
</tr>
<tr>
<th>2008</th>
    <td>28</td>
    <td>14</td>
    <td>22</td>
    <td>179 820</td>
    <td>72</td>  
</tr>
<tr>
<th>2009</th>
    <td>22</td>
    <td>9</td>
    <td>19</td>
    <td>189 747</td>
    <td>49</td>  
</tr>
<tr>
<th>2010</th>
    <td>31</td>
    <td>15</td>
    <td>19</td>
    <td>176 135</td>
    <td>53</td>  
</tr>
<tr>
<th>2011</th>
    <td>11</td>
    <td>14</td>
    <td>15</td>
    <td>196 770</td>
    <td>45</td>  
</tr>
<tr>
<th>2012</th>
    <td>20</td>
    <td>10</td>
    <td>16</td>
    <td>182 385</td>
    <td>41</td>  
</tr>
<tr>
<th>2013</th>
   <td>21</td>
    <td>12</td>
    <td>17</td>
    <td>183 247</td>
    <td>44</td>  
</tr>
<tr>
<th>2014</th>
   <td>20</td>
    <td>10</td>
    <td>25</td>
    <td>184 517</td>
    <td>51</td>  
</tr>

<th>2015</th>
   <td>24</td>
    <td>10</td>
    <td>16</td>
    <td>188146</td>
    <td>42</td>  
</tr>
<th>2016</th>
    <td>20</td>
    <td>9</td>
    <td>20</td>
    <td>196955</td>
    <td>33</td> 
</tr>
</table>
\* Zentrale Wiedereintrittsstelle ab Juni 2004


<!-- <table class="stat">
   <tr>
    <th>&nbsp;</th>
    <th>2002</th>
    <th>2003</th>
    <th>2004</th>
    <th>2005</th>
    <th>2006</th>
    <th>2007</th>
    <th>2008</th>
   </tr>
   <tr>
    <th>Taufen</th>
    <td>23</td>
    <td>21</td>
    <td>31</td>
    <td>30</td>
    <td>28</td>
    <td>25</td>
    <td>28</td>    
   </tr>
   <tr>
    <th>Trauungen</th>
    <td>8</td>
    <td>10</td>
    <td>11</td>
    <td>11</td>
    <td>16</td>
    <td>17</td>
    <td>14</td>
   </tr>
   <tr>
    <th>Beerdigungen</th>
    <td>21</td>
    <td>24</td>
    <td>20</td>
    <td>33</td>
    <td>22</td>
    <td>16</td>
    <td>22</td>
    </tr> 
    <tr>
    <th><br></th>
    </tr> 
     <tr>
    <th>Gäste</th>
    <td>104306</td>
    <td>118602</td>
    <td>140437</td>
    <td>144170</td>
    <td>161334</td>
    <td>173237</td>
    <td>179820</td>    
   </tr>
    <tr>
    <th>Wiedereintritte*</th>
    <td>4</td>
    <td>6</td>
    <td>38</td>
    <td>53</td>
    <td>54</td>
    <td>62</td>
    <td>72</td>
   </tr>
   </table>
 \* zentrale Wiedereintrittsstelle ab Juni 2004
  
<table class="stat">
   <tr>
    <th>&nbsp;</th>
    <th>2009</th>
    <th>2010</th>
    <th>2011</th>
    <th>2012</th>
    <th>2013</th>
    <th>2014</th>
    <th>2015</th>
   </tr>
   <tr>
    <th>Taufen</th>
    <td>22</td>
    <td>31</td>
    <td>11</td>
    <td>20</td>
    <td></td>
    <td></td>
    <td></td>    
   </tr>
   <tr>
    <th>Trauungen</th>
    <td>9</td>
    <td>15</td>
    <td>14</td>
    <td>10</td>
    <td></td>
    <td></td>
    <td></td>
   </tr>
   <tr>
    <th>Beerdigungen</th>
    <td>19</td>
    <td>19</td>
    <td>15</td>
    <td>16</td>
    <td></td>
    <td></td>
    <td></td>
    </tr> 
    <tr>
    <th><br></th>
    </tr> 
     <tr>
    <th>Gäste</th>
    <td>189747</td>
    <td>176135</td>
    <td>196770</td>
    <td> 182385</td>
    <td></td>
    <td></td>
    <td></td>    
   </tr>
    <tr>
    <th>Wiedereintritte*</th>
    <td>49</td>
    <td>53</td>
    <td>45</td>
    <td>41</td>
    <td></td>
    <td></td>
    <td></td>
   </tr>
   </table> -->
  
  
  
<?php $main = ob_get_clean();

require 'layouts/main.php';

