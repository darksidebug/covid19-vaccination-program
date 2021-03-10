export async function AddNode(response,table_name){
    let dataTable =  document.getElementById('datatable');
    let maintable = document.getElementById('maintable')
    dataTable.innerHTML = '';
    maintable.innerHTML= '';
    if(response.data.length == 0)
    {
        dataTable.appendChild(NoDataDisplay());
    }else{
        // console.log(response);

        // dataTable.appendChild(CreateTable(CreateHeader(table_name),CreateBody(response)));
        maintable.appendChild(CreateButton(table_name))
        dataTable.appendChild(CreateTable(table_name, response))
    }
}


function CreateHeader(table_name)
{
    let createTHEAD = document.createElement("thead")
    let createTR = document.createElement("tr");
    let table_headers_data = "";

    if(table_name == "User")
    {
        table_headers_data = ['First Name', 'Last Name', 'Username', 'User Type', 'Municipality']
    }else{
        table_headers_data = ['Qr Code', 'First Name', 'Last Name', 'Middle Name', 'Suffix' , 'Province' , 'Municipality' , 'Barangay', 'Purok', 'Contact Number' , 'Birth Date', 'Gender', 'Civil Status',' Category', 'Category Id', 'Category Id Number', 'Employment Status', 'Philhealth Id Number', 'PWD Id Number', 'Direct Contact', 'Profession', 'Name Employer', 'Province Employer', 'Municipality Employer', 'Barangay Employer', 'Contact Number Employer', 'Pregnant Status', 'Comorbidity', 'Comorbidity Yes', 'Allergy', 'Allergy Yes', 'Diagnose Covid', 'Date Diagnose Covid Yes', 'Covid Classification', 'Electronic Informed Consent', 'Vaccinator Username', 'Vaccinator User Type', 'Date of Vaccination']
    }

    let table_headers ="";

    for(let x in table_headers_data)
    {
        table_headers += `<th> ${table_headers_data[x]} </th>`;
    }

    createTR.innerHTML = table_headers;
    createTHEAD.appendChild(createTR);

    // console.log(createTHEAD)
    return createTHEAD;
}

// function CreateBody(response)
// {
//     let createTBODY = document.createElement('tbody');
//     let createTR = document.createElement('tr');

//     let table_body_tr = "";
//     let table_body_data = "";
//     let data = "";



//         for(let x in response.data){
//             data = response.data[x];
//             for(var key of Object.keys(data)){
//                 table_body_data += `<td> ${data[key]} </td>`;
//             }
//             // table_body_tr = `${table_body_data} </tr>`;
//             createTR.innerHTML = table_body_data;
//         }


//     createTBODY.appendChild(createTR);

//     return createTBODY;
// }

// function CreateTHEAD(table_name, table)
// {
//     var header = table.createTHead();
//     let table_headers_data = "";

//     if(table_name == "User")
//     {
//         table_headers_data = ['First Name', 'Last Name', 'Username', 'User Type', 'Municipality']
//     }else{
//         table_headers_data = ['Qr Code', 'First Name', 'Last Name', 'Middle Name', 'Suffix' , 'Province' , 'Municipality' , 'Barangay', 'Purok', 'Contact Number' , 'Birth Date', 'Gender', 'Civil Status',' Category', 'Category Id', 'Category Id Number', 'Employment Status', 'Philhealth Id Number', 'PWD Id Number', 'Direct Contact', 'Profession', 'Name Employer', 'Province Employer', 'Municipality Employer', 'Barangay Employer', 'Contact Number Employer', 'Pregnant Status', 'Comorbidity', 'Comorbidity Yes', 'Allergy', 'Allergy Yes', 'Diagnose Covid', 'Date Diagnose Covid Yes', 'Covid Classification', 'Electronic Informed Consent', 'Vaccinator Username', 'Vaccinator User Type', 'Date of Vaccination']
//     }

//     let row = header.insertRow(0);

//     for(let x in table_headers_data)
//   {
//   	let cell = row.insertCell(x)
//     cell.innerHTML = "<th>" + table_headers_data[x] + "</th>";
//   }
// }

function CreateTBODY(response_data, table)
{
    // var body = table.createTFoot();

    for(let x in response_data.data)
    {
        let rows = table.insertRow(0)
        let body_data = response_data.data[x]

        for(let key of Object.keys(body_data).reverse())
        {
            let cells = rows.insertCell(0)
            cells.innerHTML = "<td>" +  body_data[key] + "</td>"
        }
    }

}

function CreateTable(table_name, response_data)
{
    let createTable = document.createElement('table');
    createTable.classList.add("table", "table-hover");

    // createTable.innerHTML = table_header.outerHTML + table_body.outerHTML
    // CreateTHEAD(table_name,createTable)
    CreateTBODY(response_data,createTable);
    createTable.appendChild(CreateHeader(table_name));


    return createTable;
}

function NoDataDisplay()
{
    let createPelement = document.createElement("h5")
    createPelement.innerText = "No data to be display"
    createPelement.classList.add("text-center", "text-secondary")

    return createPelement;
}


function CreateButton(table_name)
{
    let createButton = document.createElement('button')
    createButton.classList.add('btn', 'btn-primary','mb-3')
    createButton.innerText = 'Export to CSV'

    let date = new Date();
    var filename = date.getFullYear() + "-" + date.getMonth() + "-" + date.getDate() + "-"+ table_name +".csv"
    createButton.addEventListener('click', function(e){
        exportTableToCSV(filename)
    })

    return createButton
}

function exportTableToCSV(filename) {
    var csv = [];
    var rows = document.querySelectorAll("table tr");

    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");

        for (var j = 0; j < cols.length; j++)
            row.push(cols[j].innerText);

        csv.push(row.join(","));
    }

    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
}

function downloadCSV(csv, filename) {
    var csvFile;
    var downloadLink;

    // CSV file
    csvFile = new Blob([csv], {type: "text/csv"});

    // Download link
    downloadLink = document.createElement("a");

    // File name
    downloadLink.download = filename;

    // Create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);

    // Hide download link
    downloadLink.style.display = "none";

    // Add the link to DOM
    document.body.appendChild(downloadLink);

    // Click download link
    downloadLink.click();
}
