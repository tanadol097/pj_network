<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_home.css') }}">
    <title>Document Management System</title>
    {{-- <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #4e4783;
            padding: 10px 20px;
            color: white;
        }

        .header img {
            height: 40px;
        }

        .search-bar {
            width: 50%;
        }

        .search-bar input {
            width: 100%;
            padding: 5px;
            font-size: 16px;
        }

        .leave-btn {
            background-color: #ff4c4c;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .table-container {
            margin: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #f4f4f4;
        }

        .status-ready {
            color: green;
            font-weight: bold;
        }

        .status-pending {
            color: orange;
            font-weight: bold;
        }

        .filter-icon {
            cursor: pointer;
        }

        /* Scrollable table if content overflows */
        .table-container {
            max-height: 400px;
            overflow-y: auto;
        }
    </style> --}}
</head>
<body>

    <!-- Header Section -->
    <div class="header">
        <img src="{{ asset('img/logo.png') }}" alt="DMS Logo" class="logo" >
        <div class="search-bar">
            <input type="text" placeholder="Search documents...">
        </div>
        <button class="leave-btn">Leave</button>
    </div>

    <!-- Table Section -->
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ผู้ส่ง</th>
                    <th>แผนก</th>
                    <th>ชื่อเรื่อง</th>
                    <th>รหัสเอกสาร</th>
                    <th>ประเภท</th>
                    <th>วันที่รับเอกสาร</th>
                    <th>สถานะ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>พี่หมื่นวง</td>
                    <td>CEO</td>
                    <td>รับทราบ/รายงานประจำปี</td>
                    <td>001-1-01</td>
                    <td>เอกสาร</td>
                    <td>2024-06-22 / 09:15:00</td>
                    <td><span class="status-ready">เสร็จสิ้น</span></td>
                </tr>
                <tr>
                    <td>010</td>
                    <td>เก๋เทพพิชิตอ่าง</td>
                    <td>AD</td>
                    <td>แจ้งปิด</td>
                    <td>010-2-12</td>
                    <td>เอกสาร</td>
                    <td>2024-06-24 / 15:23:45</td>
                    <td><span class="status-ready">เสร็จสิ้น</span></td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>เว็บตัวตึง</td>
                    <td>SD</td>
                    <td>พนักงานอันตราย</td>
                    <td>003-3-05</td>
                    <td>VDO</td>
                    <td>2024-06-28 / 19:27:00</td>
                    <td><span class="status-ready">เสร็จสิ้น</span></td>
                </tr>
                <tr>
                    <td>245</td>
                    <td>สุดไข่เค็ม</td>
                    <td>AD</td>
                    <td>ภาคประชาชน</td>
                    <td>245-2-45</td>
                    <td>เอกสาร</td>
                    <td>2024-07-01 / 10:35:00</td>
                    <td><span class="status-ready">เสร็จสิ้น</span></td>
                </tr>
                <tr>
                    <td>125</td>
                    <td>ไอ้กุย</td>
                    <td>HR</td>
                    <td>รายรับรายจ่ายเดือนตุลา</td>
                    <td>125-4-55</td>
                    <td>เอกสาร</td>
                    <td>2024-07-03 / 16:40:00</td>
                    <td><span class="status-pending">รอดำเนินการ</span></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>
