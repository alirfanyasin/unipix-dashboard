@extends('layouts.app')
@section('page_title', 'Dashboard')
@section('content')
  <div>
    <div class="mb-6">
      <h2 class="text-2xl font-bold text-gray-800 mb-2">Selamat Datang!</h2>
      <p class="text-gray-600">Ini adalah halaman dashboard utama Anda.</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500 text-sm">Total Users</p>
            <p class="text-2xl font-bold text-gray-800 mt-1">1,234</p>
          </div>
          <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
            <span class="iconify text-blue-600 text-2xl" data-icon="mdi:account-group"></span>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500 text-sm">Revenue</p>
            <p class="text-2xl font-bold text-gray-800 mt-1">$12,345</p>
          </div>
          <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
            <span class="iconify text-green-600 text-2xl" data-icon="mdi:currency-usd"></span>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500 text-sm">Orders</p>
            <p class="text-2xl font-bold text-gray-800 mt-1">567</p>
          </div>
          <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
            <span class="iconify text-yellow-600 text-2xl" data-icon="mdi:cart"></span>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500 text-sm">Products</p>
            <p class="text-2xl font-bold text-gray-800 mt-1">89</p>
          </div>
          <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
            <span class="iconify text-purple-600 text-2xl" data-icon="mdi:package-variant"></span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-white p-10 rounded-2xl shadow">
    <table id="DataTable" class="stripe hover row-border">
      <thead class="bg-black text-white">
        <tr>
          <th>Name</th>
          <th>Position</th>
          <th>Office</th>
          <th>Age</th>
          <th>Start date</th>
          <th>Salary</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Tiger Nixon</td>
          <td>System Architect</td>
          <td>Edinburgh</td>
          <td>61</td>
          <td>2011-04-25</td>
          <td>$320,800</td>
        </tr>
        <tr>
          <td>Garrett Winters</td>
          <td>Accountant</td>
          <td>Tokyo</td>
          <td>63</td>
          <td>2011-07-25</td>
          <td>$170,750</td>
        </tr>
        <tr>
          <td>Ashton Cox</td>
          <td>Junior Technical Author</td>
          <td>San Francisco</td>
          <td>66</td>
          <td>2009-01-12</td>
          <td>$86,000</td>
        </tr>
        <tr>
          <td>Cedric Kelly</td>
          <td>Senior JavaScript Developer</td>
          <td>Edinburgh</td>
          <td>22</td>
          <td>2012-03-29</td>
          <td>$433,060</td>
        </tr>
        <tr>
          <td>Airi Satou</td>
          <td>Accountant</td>
          <td>Tokyo</td>
          <td>33</td>
          <td>2008-11-28</td>
          <td>$162,700</td>
        </tr>
        <tr>
          <td>Brielle Williamson</td>
          <td>Integration Specialist</td>
          <td>New York</td>
          <td>61</td>
          <td>2012-12-02</td>
          <td>$372,000</td>
        </tr>
        <tr>
          <td>Herrod Chandler</td>
          <td>Sales Assistant</td>
          <td>San Francisco</td>
          <td>59</td>
          <td>2012-08-06</td>
          <td>$137,500</td>
        </tr>
        <tr>
          <td>Rhona Davidson</td>
          <td>Integration Specialist</td>
          <td>Tokyo</td>
          <td>55</td>
          <td>2010-10-14</td>
          <td>$327,900</td>
        </tr>
        <tr>
          <td>Colleen Hurst</td>
          <td>JavaScript Developer</td>
          <td>San Francisco</td>
          <td>39</td>
          <td>2009-09-15</td>
          <td>$205,500</td>
        </tr>
        <tr>
          <td>Sonya Frost</td>
          <td>Software Engineer</td>
          <td>Edinburgh</td>
          <td>23</td>
          <td>2008-12-13</td>
          <td>$103,600</td>
        </tr>
        <tr>
          <td>Jena Gaines</td>
          <td>Office Manager</td>
          <td>London</td>
          <td>30</td>
          <td>2008-12-19</td>
          <td>$90,560</td>
        </tr>
        <tr>
          <td>Quinn Flynn</td>
          <td>Support Lead</td>
          <td>Edinburgh</td>
          <td>22</td>
          <td>2013-03-03</td>
          <td>$342,000</td>
        </tr>
        <tr>
          <td>Charde Marshall</td>
          <td>Regional Director</td>
          <td>San Francisco</td>
          <td>36</td>
          <td>2008-10-16</td>
          <td>$470,600</td>
        </tr>
        <tr>
          <td>Haley Kennedy</td>
          <td>Senior Marketing Designer</td>
          <td>London</td>
          <td>43</td>
          <td>2012-12-18</td>
          <td>$313,500</td>
        </tr>
        <tr>
          <td>Tatyana Fitzpatrick</td>
          <td>Regional Director</td>
          <td>London</td>
          <td>19</td>
          <td>2010-03-17</td>
          <td>$385,750</td>
        </tr>
        <tr>
          <td>Michael Silva</td>
          <td>Marketing Designer</td>
          <td>London</td>
          <td>66</td>
          <td>2012-11-27</td>
          <td>$198,500</td>
        </tr>
        <tr>
          <td>Paul Byrd</td>
          <td>Chief Financial Officer (CFO)</td>
          <td>New York</td>
          <td>64</td>
          <td>2010-06-09</td>
          <td>$725,000</td>
        </tr>
        <tr>
          <td>Gloria Little</td>
          <td>Systems Administrator</td>
          <td>New York</td>
          <td>59</td>
          <td>2009-04-10</td>
          <td>$237,500</td>
        </tr>
        <tr>
          <td>Bradley Greer</td>
          <td>Software Engineer</td>
          <td>London</td>
          <td>41</td>
          <td>2012-10-13</td>
          <td>$132,000</td>
        </tr>
        <tr>
          <td>Dai Rios</td>
          <td>Personnel Lead</td>
          <td>Edinburgh</td>
          <td>35</td>
          <td>2012-09-26</td>
          <td>$217,500</td>
        </tr>
        <tr>
          <td>Jenette Caldwell</td>
          <td>Development Lead</td>
          <td>New York</td>
          <td>30</td>
          <td>2011-09-03</td>
          <td>$345,000</td>
        </tr>
        <tr>
          <td>Yuri Berry</td>
          <td>Chief Marketing Officer (CMO)</td>
          <td>New York</td>
          <td>40</td>
          <td>2009-06-25</td>
          <td>$675,000</td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
