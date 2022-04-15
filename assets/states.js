  let data = [{
          state: "Andhra Pradesh",
          value: "Andhra Pradesh"
      },
      {
          state: "Arunachal Pradesh",
          value: "Arunachal Pradesh"
      },
      {
          state: "Assam",
          value: "Assam"
      },
      {
          state: "Bihar",
          value: "Bihar"
      },
      {
          state: "Chandigarh (UT)",
          value: "Chandigarh (UT)"
      },
      {
          state: "Chhattisgarh",
          value: "Chhattisgarh"
      },
      {
          state: "Dadra and Nagar Haveli (UT)",
          value: "Dadra and Nagar Haveli (UT)"
      },
      {
          state: "Daman and Diu (UT)",
          value: "Daman and Diu (UT)"
      },
      {
          state: "Delhi",
          value: "Delhi"
      },
      {
          state: "Goa",
          value: "Goa"
      },
      {
          state: "Gujarat",
          value: "Gujarat"
      },
      {
          state: "Haryana",
          value: "Haryana"
      },
      {
          state: "Himachal Pradesh",
          value: "Himachal Pradesh"
      },
      {
          state: "Jammu and Kashmir",
          value: "Jammu and Kashmir"
      },
      {
          state: "Jharkhand",
          value: "Jharkhand"
      },
      {
          state: "Karnataka",
          value: "Karnataka"
      },
      {
          state: "Kerala",
          value: "Kerala"
      },
      {
          state: "Lakshadweep (UT)",
          value: "Lakshadweep (UT)"
      },
      {
          state: "Madhya Pradesh",
          value: "Madhya Pradesh"
      },
      {
          state: "Maharashtra",
          value: "Maharashtra"
      },
      {
          state: "Manipur",
          value: "Manipur"
      },
      {
          state: "Meghalaya",
          value: "Meghalaya"
      },
      {
          state: "Mizoram",
          value: "Mizoram"
      },
      {
          state: "Nagaland",
          value: "Nagaland"
      },
      {
          state: "Odisha",
          value: "Odisha"
      },
      {
          state: "Puducherry (UT)",
          value: "Puducherry (UT)"
      },
      {
          state: "Punjab",
          value: "Punjab"
      },
      {
          state: "Rajasthan",
          value: "Rajasthan"
      },
      {
          state: "Sikkim",
          value: "Sikkim"
      },
      {
          state: "Tamil Nadu",
          value: "Tamil Nadu"
      },
      {
          state: "Telangana",
          value: "Telangana"
      },
      {
          state: "Tripura",
          value: "Tripura"
      },
      {
          state: "Uttar Pradesh",
          value: "Uttar Pradesh"
      },
      {
          state: "Uttarakhand",
          value: "Uttarakhand"
      },
      {
          state: "West Bengal",
          value: "West Bengal"
      }
  ];
  let stateSelect = document.getElementById("stateSelect")
  let stateBox = ""
  data.map((item) => {
      stateBox += `<option value=${item.value}>${item.state}</option>`
  })
  stateSelect.innerHTML += stateBox;