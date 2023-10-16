const zone = document.getElementById('zone');
const village = document.getElementById('village');
const street = document.getElementById('street');

village.disabled = true;
street.disabled = true;

zone.addEventListener('change', () => {
    village.innerHTML = '<option value="" disabled selected>Select a village</option>';
  street.innerHTML = '<option value="" disabled selected>Select a street</option>';

  village.disabled = false;
  street.disabled = true;

  if (zone.value === 'Zone 1') {
    village.innerHTML += '<option value="Village 1">Village 1</option>';
    village.innerHTML += '<option value="Village 2">Village 2</option>';
    village.innerHTML += '<option value="Village 3">Village 3</option>';
    village.innerHTML += '<option value="Village 4">Village 4</option>';
    village.innerHTML += '<option value="Village 5">Village 5</option>';
    village.innerHTML += '<option value="Village 6">Village 6</option>';
  } else if (zone.value === 'Zone 2') {
    village.innerHTML += '<option value="Village 7">Village 7</option>';
    village.innerHTML += '<option value="Village 8">Village 8</option>';
    village.innerHTML += '<option value="Village 9">Village 9</option>';
    village.innerHTML += '<option value="Village 10">Village 10</option>';
    village.innerHTML += '<option value="Village 11">Village 11</option>';
    village.innerHTML += '<option value="Village 12">Village 12</option>';
  }
  else if (zone.value === 'Zone 3') {
    village.innerHTML += '<option value="Village 13">Village 13</option>';
    village.innerHTML += '<option value="Village 14">Village 14</option>';
    village.innerHTML += '<option value="Village 15">Village 15</option>';
    village.innerHTML += '<option value="Village 16">Village 16</option>';
    village.innerHTML += '<option value="Village 17">Village 17</option>';
    village.innerHTML += '<option value="Village 18">Village 18</option>';
  }
  else if (zone.value === 'Zone 4') {
    village.innerHTML += '<option value="Village 19">Village 19</option>';
    village.innerHTML += '<option value="Village 20">Village 20</option>';
    village.innerHTML += '<option value="Village 21">Village 21</option>';
    village.innerHTML += '<option value="Village 22">Village 22</option>';
    village.innerHTML += '<option value="Village 23">Village 23</option>';
    village.innerHTML += '<option value="Village 24">Village 24</option>';
  }
  else if (zone.value === 'Zone 5') {
    village.innerHTML += '<option value="Village 25">Village 25</option>';
    village.innerHTML += '<option value="Village 26">Village 26</option>';
    village.innerHTML += '<option value="Village 27">Village 27</option>';
    village.innerHTML += '<option value="Village 28">Village 28</option>';
    village.innerHTML += '<option value="Village 29">Village 29</option>';
    village.innerHTML += '<option value="Village 30">Village 30</option>';
  }
  //Add elif to add more village under that zone
});

village.addEventListener('change', () => {
  street.innerHTML = '<option value="" disabled selected>Select a street</option>';

  street.disabled = false;

  if (village.value === 'Village 1') {
    street.innerHTML += '<option value="Street 1">Street 1</option>';
    street.innerHTML += '<option value="Street 2">Street 2</option>';
    street.innerHTML += '<option value="Street 3">Street 3</option>';
    street.innerHTML += '<option value="Street 4">Street 4</option>';
    street.innerHTML += '<option value="Street 5">Street 5</option>';
    street.innerHTML += '<option value="Street 6">Street 6</option>';
  } else if (village.value === 'Village 2') {
    street.innerHTML += '<option value="Street 7">Street 7</option>';
    street.innerHTML += '<option value="Street 8">Street 8</option>';
    street.innerHTML += '<option value="Street 9">Street 9</option>';
    street.innerHTML += '<option value="Street 10">Street 10</option>';
    street.innerHTML += '<option value="Street 11">Street 11</option>';
    street.innerHTML += '<option value="Street 12">Street 12</option>';
  }
  else if (village.value === 'Village 3') {
    street.innerHTML += '<option value="Street 13">Street 13/option>';
    street.innerHTML += '<option value="Street 14">Street 14</option>';
    street.innerHTML += '<option value="Street 15">Street 15</option>';
    street.innerHTML += '<option value="Street 16">Street 16</option>';
    street.innerHTML += '<option value="Street 17">Street 17</option>';
    street.innerHTML += '<option value="Street 18">Street 18</option>';
  }
  else if (village.value === 'Village 4') {
    street.innerHTML += '<option value="Street 19">Street 19</option>';
    street.innerHTML += '<option value="Street 20">Street 20</option>';
    street.innerHTML += '<option value="Street 21">Street 21</option>';
    street.innerHTML += '<option value="Street 22">Street 22</option>';
    street.innerHTML += '<option value="Street 23">Street 23</option>';
    street.innerHTML += '<option value="Street 24">Street 24</option>';
  }
  else if (village.value === 'Village 5') {
    street.innerHTML += '<option value="Street 25">Street 25</option>';
    street.innerHTML += '<option value="Street 26">Street 26</option>';
    street.innerHTML += '<option value="Street 27">Street 27</option>';
    street.innerHTML += '<option value="Street 28">Street 28</option>';
    street.innerHTML += '<option value="Street 29">Street 29</option>';
    street.innerHTML += '<option value="Street 30">Street 30</option>';
  }
  else if (village.value === 'Village 6') {
    street.innerHTML += '<option value="Street 31">Street 31</option>';
    street.innerHTML += '<option value="Street 32">Street 32</option>';
    street.innerHTML += '<option value="Street 33">Street 33</option>';
    street.innerHTML += '<option value="Street 34">Street 34</option>';
    street.innerHTML += '<option value="Street 35">Street 35</option>';
    street.innerHTML += '<option value="Street 36">Street 36</option>';
  }
  else if (village.value === 'Village 7') {
    street.innerHTML += '<option value="Street 37">Street 37</option>';
  }
  else if (village.value === 'Village 8') {
    street.innerHTML += '<option value="Street 38">Street 38</option>';
  }
  else if (village.value === 'Village 9') {
    street.innerHTML += '<option value="Street 39">Street 39</option>';
  }
  else if (village.value === 'Village 10') {
    street.innerHTML += '<option value="Street 40">Street 40</option>';
  }
  else if (village.value === 'Village 11') {
    street.innerHTML += '<option value="Street 41">Street 41</option>';
  }
  else if (village.value === 'Village 12') {
    street.innerHTML += '<option value="Street 42">Street 42</option>';
  }
  else if (village.value === 'Village 13') {
    street.innerHTML += '<option value="Street 43">Street 43</option>';
  }
  else if (village.value === 'Village 14') {
    street.innerHTML += '<option value="Street 44">Street 44</option>';
  }
  else if (village.value === 'Village 15') {
    street.innerHTML += '<option value="Street 45">Street 45</option>';
  }
  else if (village.value === 'Village 16') {
    street.innerHTML += '<option value="Street 46">Street 46</option>';
  }
  else if (village.value === 'Village 17') {
    street.innerHTML += '<option value="Street 47">Street 47</option>';
  }
  else if (village.value === 'Village 18') {
    street.innerHTML += '<option value="Street 48">Street 48</option>';
  }
  else if (village.value === 'Village 19') {
    street.innerHTML += '<option value="Street 49">Street 49</option>';
  }
  else if (village.value === 'Village 20') {
    street.innerHTML += '<option value="Street 50">Street 50</option>';
  }
  else if (village.value === 'Village 21') {
    street.innerHTML += '<option value="Street 51">Street 51</option>';
  }
  else if (village.value === 'Village 22') {
    street.innerHTML += '<option value="Street 52">Street 52</option>';
  }
  else if (village.value === 'Village 23') {
    street.innerHTML += '<option value="Street 53">Street 53</option>';
  }
  else if (village.value === 'Village 24') {
    street.innerHTML += '<option value="Street 54">Street 54</option>';
  }
  else if (village.value === 'Village 25') {
    street.innerHTML += '<option value="Street 55">Street 55</option>';
  }
  else if (village.value === 'Village 26') {
    street.innerHTML += '<option value="Street 56">Street 56</option>';
  }
  else if (village.value === 'Village 27') {
    street.innerHTML += '<option value="Street 57">Street 57</option>';
  }
  else if (village.value === 'Village 28') {
    street.innerHTML += '<option value="Street 58">Street 58</option>';
  }
  else if (village.value === 'Village 29') {
    street.innerHTML += '<option value="Street 59">Street 59</option>';
  }
  else if (village.value === 'Village 30') {
    street.innerHTML += '<option value="Street 60">Street 60</option>';
  }
  //Add elif to add more street inside that village
});