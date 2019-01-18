/*
  created by: Opeyemi Adeyeye
  18/01/2019
*/
const AppInterface = {
  populateData: function() {
    var someData = [
      { image: "oriental_insure.png", price: 30200, total_price: 789 },
      { image: "magma_insure.png", price: 45000, total_price: 780 },
      { image: "shriram_insure.png", price: 40000, total_price: 600 }
    ];
    var buildTemplate = "";
    for (i = 0; i < someData.length; i++) {
      buildTemplate += this.buildHTMLString(
        someData[i].image,
        someData[i].price,
        someData[i].total_price
      );
    }
    this.populateDivWithHTML(buildTemplate, someData.length);
  },
  buildHTMLString: function(image, price, total_price) {
    var result_string =
      '<div class="card mb-3">' +
      '<div class="card-body p-2">' +
      '<div class="row">' +
      '<div class="col-lg-3">' +
      '<img src="images/' +
      image +
      '" class="img-fluid">' +
      "</div>" +
      '<div class="col-lg-4 d-flex justify-content-between align-items-center">' +
      '<div>1st Year IDV <span class="font-weight-bold">' +
      price +
      "</span></div>" +
      '<div class="border p-2 rounded">' +
      total_price +
      "</div>" +
      "</div>" +
      '<div class="col-lg-5 border-left-0 border-lg-left">Plan without Personal Accident Cover</div>' +
      "</div>" +
      "</div>" +
      "</div>";
    return result_string;
  },
  populateDivWithHTML: function(result_string, total_result) {
    console.log(result_string);
    var container = document.querySelector("#insure_list_result"),
      result_list_div = container.querySelector("#insure_avail_list"),
      result_count_div = container.querySelector("#insure_avail_count");

    result_count_div.innerHTML = total_result + " plans found";
    result_list_div.innerHTML = result_string;
  }
};

var expire_select = document.querySelector("#expire_select");
expire_select.onchange = function() {
  let selected_value = this.options[this.selectedIndex].value;
  const expire_display_options = document.querySelector(
    "#expire_display_options"
  );

  if (selected_value == 1) {
    expire_display_options.classList.remove("display-none");
  } else {
    expire_display_options.classList.add("display-none");
  }
};

var insure_form_submit = document.querySelector("#insure_form");
insure_form_submit.onsubmit = function(el) {
  el.preventDefault();
  var form = document.querySelector("#insure_form"),
    loader = form.querySelector(".loader"),
    insure_list_result = document.querySelector("#insure_list_result");
  loader.classList.remove("display-none");

  var data = $(this)
    .serializeArray()
    .reduce(function(obj, item) {
      obj[item.name] = item.value;
      return obj;
    }, {});

  setTimeout(function() {
    console.log("me after 1000 mili seconds");
    loader.classList.add("display-none");
    form.classList.add("display-none");
    insure_list_result.classList.remove("display-none");
    AppInterface.populateData();
  }, 1000);
};
