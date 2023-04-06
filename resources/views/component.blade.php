@extends('layouts.app')

@section('style')
    <style>
        /* Common Input CSS Start  */
        .input-box {
            position: relative;
            width: 220px;
            height: 56px;
        }

        .input-box input {
            width: 100%;
            padding: 10px;
            border: 1px solid #BCBCBC;
            border-radius: 5px;
            outline: none;
            font-size: 1em;

        }

        .input-box input:focus {
            border: 1.5px solid #207DFF;
        }

        .input-box input:focus~span {
            color: #207DFF;
        }

        .input-box span {
            position: absolute;
            transition: all 0.3s ease;
            left: 0;
            padding: 10px;
            pointer-events: none;
            font-size: 1em;
            font-weight: 400;
            color: #232323;

        }

        .input-box input:valid~span,
        .input-box input:focus~span {
            transform: translatex(10px) translateY(-11px);
            transition: 0.3s ease;
            font-size: 1em;
            font-weight: 500;
            padding: 0 10px;
            background: #ffffff;
        }

        /* Common Input CSS End  */
        /* Common select CSS Start  */
        .select-box {
            position: relative;
            width: 220px;
            height: 56px;
        }

        .select-box select {
            width: 100%;
            padding: 10px;
            border: 1px solid #BCBCBC;
            border-radius: 5px;
            outline: none;
            font-size: 1em;

        }

        .select-box select:focus {
            border: 1.5px solid #207DFF;
        }

        .select-box select:focus~span {
            color: #207DFF;
        }

        .select-box span {
            position: absolute;
            transition: all 0.3s ease;
            left: 0;
            padding: 10px;
            pointer-events: none;
            font-size: 1em;
            font-weight: 400;
            color: #232323;

        }

        .select-box select:valid~span,
        .select-box select:focus~span {
            transform: translatex(10px) translateY(-11px);
            transition: 0.3s ease;
            font-size: 1em;
            font-weight: 500;
            padding: 0 10px;
            background: #ffffff;
        }

        /* Common select CSS End  */

        /* New select Start */
        /* .select-btn {
                                                                                                                                                                                                height: 50px;
                                                                                                                                                                                                font-size: 22px;
                                                                                                                                                                                                display: flex;
                                                                                                                                                                                                padding: 0 20px;
                                                                                                                                                                                                border-radius: 7px;
                                                                                                                                                                                                background: #ffff;
                                                                                                                                                                                                align-items: center;
                                                                                                                                                                                                justify-content: space-between;
                                                                                                                                                                                                box-shadow: 1px 1px 10px rgba(46, 114, 174, 0.867);
                                                                                                                                                                                            }

                                                                                                                                                                                            .select-btn i {
                                                                                                                                                                                                font-size: 31px;
                                                                                                                                                                                            }

                                                                                                                                                                                            .content {
                                                                                                                                                                                                padding: 20px;
                                                                                                                                                                                                margin-top: 15px;
                                                                                                                                                                                                border-radius: 7px;
                                                                                                                                                                                                background: #fff;
                                                                                                                                                                                                box-shadow: 1px 1px 10px rgba(46, 114, 174, 0.867);

                                                                                                                                                                                            }

                                                                                                                                                                                            .content .search {
                                                                                                                                                                                                position: relative;
                                                                                                                                                                                            }

                                                                                                                                                                                            .search i {
                                                                                                                                                                                                left: 15px;
                                                                                                                                                                                                color: #999;
                                                                                                                                                                                                font-size: 20px;
                                                                                                                                                                                                line-height: 53px;
                                                                                                                                                                                                position: absolute;

                                                                                                                                                                                            }

                                                                                                                                                                                            .search input {
                                                                                                                                                                                                height: 53px;
                                                                                                                                                                                                width: 100%;
                                                                                                                                                                                                outline: none;
                                                                                                                                                                                                font-size: 17px;
                                                                                                                                                                                                padding: 0 15px 0 43px;
                                                                                                                                                                                                border: 1px solid #b3b3b3;
                                                                                                                                                                                            } */

        .select-btn,
        li {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .select-btn {
            height: 40px;
            width: 222px;
            padding: 0 20px;
            font-size: 14px;
            background: #fff;
            border: 1px solid #BCBCBC;
            border-radius: 7px;
            justify-content: space-between;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .select-btn i {
            font-size: 14px;
            transition: transform 0.3s linear;
        }

        .wrapper.active .select-btn i {
            transform: rotate(-180deg);
        }

        .content {
            display: none;
            padding: 5px;
            width: 222px;
            margin-top: 15px;
            background: #fff;
            border-radius: 7px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .wrapper.active .content {
            position: absolute;
            display: block;
            z-index: 1;
        }

        .content .search {
            position: relative;
        }

        .search i {
            top: 50%;
            left: 15px;
            color: #999;
            font-size: 20px;
            pointer-events: none;
            transform: translateY(-50%);
            position: absolute;
        }

        .search input {
            height: 50px;
            width: 100%;
            outline: none;
            font-size: 14px;
            border-radius: 5px;
            padding: 0 20px 0 43px;
            border: 1px solid #B3B3B3;
        }

        .search input:focus {
            padding-left: 42px;
            border: 2px solid #4285f4;
        }

        .search input::placeholder {
            color: #bfbfbf;
        }

        .content .options {
            margin-top: 10px;
            margin-left: -25px;
            max-height: 250px;
            overflow-y: auto;
            padding-right: 7px;
        }

        .options::-webkit-scrollbar {
            width: 7px;
        }

        .options::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 25px;
        }

        .options::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 25px;
        }

        .options::-webkit-scrollbar-thumb:hover {
            background: #b3b3b3;
        }

        .options li {
            height: 50px;
            padding: 0 13px;
            font-size: 14px;
        }

        .options li:hover,
        li.selected {
            border-radius: 5px;
            color: #fff;
            background: #207DFF;
        }

        /* New select End */
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <h3>Components</h3>
            {{-- Common Input Feild Start --}}
            <div class="input-styles mx-3">
                <div class="row">
                    <p>Input Feild:</p>
                    <div class="col-4">
                        <div class="input-box">
                            <input type="text" class="name" required="required">
                            <span>User Name</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="wrapper">
                            <div class="select-btn">
                                <span>Select Country</span>
                                <i class='bx bxs-chevron-down'></i>
                                {{-- <i class="uil uil-angle-down"></i> --}}
                            </div>
                            <div class="content">
                                <div class="search">
                                    <i class='bx bx-search'></i>
                                    <input spellcheck="false" type="text" placeholder="Search">
                                </div>
                                <ul class="options"></ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="select-box">
                            <select type="text" class="name" required="required">
                                <option value="" style="display: none"></option>
                                <option value="">hi</option>
                                <option value="">hola</option>
                                <option value="">adios</option>
                                <option value="">home</option>
                                <option value="">roman</option>
                            </select>
                            <span>User Name</span>
                        </div>
                    </div>

                </div>
            </div>
            {{-- Common Input Feild End --}}
        </div>
    </div>
    <script>
        $(document).ready(function() {
            addCountry();
        });
        const wrapper = document.querySelector(".wrapper"),
            selectBtn = wrapper.querySelector(".select-btn"),
            searchInp = wrapper.querySelector("input"),
            options = wrapper.querySelector(".options");

        let countries = ["Afghanistan", "Algeria", "Argentina", "Australia", "Bangladesh", "Belgium", "Bhutan",
            "Brazil", "Canada", "China", "Denmark", "Ethiopia", "Finland", "France", "Germany",
            "Hungary", "Iceland", "India", "Indonesia", "Iran", "Italy", "Japan", "Malaysia",
            "Maldives", "Mexico", "Morocco", "Nepal", "Netherlands", "Nigeria", "Norway", "Pakistan",
            "Peru", "Russia", "Romania", "South Africa", "Spain", "Sri Lanka", "Sweden", "Switzerland",
            "Thailand", "Turkey", "Uganda", "Ukraine", "United States", "United Kingdom", "Vietnam"
        ];

        function addCountry(selectedCountry) {
            options.innerHTML = "";
            countries.forEach(country => {
                let isSelected = country == selectedCountry ? "selected" : "";
                let li = `<li onclick="updateName(this)" class="${isSelected}">${country}</li>`;
                options.insertAdjacentHTML("beforeend", li);
            });
        }


        function updateName(selectedLi) {
            searchInp.value = "";
            addCountry(selectedLi.innerText);
            wrapper.classList.remove("active");
            selectBtn.firstElementChild.innerText = selectedLi.innerText;
        }

        searchInp.addEventListener("keyup", () => {
            let arr = [];
            let searchWord = searchInp.value.toLowerCase();
            arr = countries.filter(data => {
                return data.toLowerCase().startsWith(searchWord);
            }).map(data => {
                let isSelected = data == selectBtn.firstElementChild.innerText ? "selected" : "";
                return `<li onclick="updateName(this)" class="${isSelected}">${data}</li>`;
            }).join("");
            options.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Oops! Country not found</p>`;
        });

        selectBtn.addEventListener("click", () => wrapper.classList.toggle("active"));
    </script>
@endsection
