<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Local Storage</title>
</head>

<body>
    <div>
        <table class="table table-bordered" id="animal" width="100%" cellspacing="0">
            <tr>
                <th>Name</th>
                <th>Class</th>
                <th>Sub_Class</th>
                <th>Infra_Class</th>
                <th>Weight</th>
                <th>Living_Period</th>
                <th>Living_Place</th>
                <th>Living_In_Groups</th>
            </tr>
        </table>
    </div>

    <script>
     function getFromLocalStorage(localStorageKey = "items") {
        return JSON.parse(localStorage.getItem(localStorageKey)) || [];
      }

      function saveToLocalStorage(localStorageKey = "items", value) {
        const items = getFromLocalStorage();
        const newItems = [...items, value];

        localStorage.setItem("items", JSON.stringify(newItems));
      }

      window.onload = function () {
        const items = getFromLocalStorage();

        items.forEach((item) => {
         // do something with items.
        });
      };
       
    </script>
</body>

</html>