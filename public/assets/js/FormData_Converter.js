export async function  CreateObject(formdata){
    let data = {};
    for (var pair of formdata.entries()) {
        data[pair[0]] = pair[1];

      }

    //   console.log(data);

      return  await data;
}
