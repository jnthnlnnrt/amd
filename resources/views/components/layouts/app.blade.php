<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Laravel') }} - {{ $title ?? 'Page Title' }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Fontawesome -->
    <script defer src="{{ asset('/vendor/plugins/fontawesome/js/all.js') }}"></script>
    <script defer src="{{ asset('/vendor/plugins/fontawesome/js/fontawesome.js') }}"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 dark:bg-neutral-900 text-sm">
    <!-- ========== HEADER ========== -->
    <header
        class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-[48] w-full bg-white border-b text-sm py-2.5 lg:ps-[260px] dark:bg-neutral-800 dark:border-neutral-700">
        <nav class="px-4 sm:px-6 flex basis-full items-center w-full mx-auto">
            <div class="me-5 lg:me-0 lg:hidden">
                <!-- Logo -->
                <a class="flex-none rounded-md inline-block focus:outline-none focus:opacity-80"
                    href="#" aria-label="Asset Manager">
                    <div class="flex items-center space-x-2">
                        <img src="{{asset('vendor\fcadevelopment\resources\brand\cubo_dipak.png')}}" alt="Dipak" class="h-8 w-auto">
                        <span class="text-xl font-bold">asset<span class="font-normal">manager</span></span>
                    </div>
                </a>
                <!-- End Logo -->
            </div>

            <div class="w-full flex items-center justify-end ms-auto md:justify-between gap-x-1 md:gap-x-3">

                <div class="hidden md:block">
                </div>

                <div class="flex flex-row items-center justify-end gap-1">
                    <button type="button"
                        class="md:hidden size-[38px] relative inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>

                    <!-- Dropdown -->
                    <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                        <button id="hs-dropdown-account" type="button"
                            class="inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:text-white"
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            <span class="inline-flex items-center justify-center size-[38px] rounded-full bg-gray-500 text-sm font-semibold text-white leading-none shrink-0">
                                {{Auth::user()->initials}}
                            </span>
                            <span class="hidden md:block">
                                {{Auth::user()->name}}
                            </span>
                        </button>

                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                            role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-account">
                            <div class="md:hidden py-3 px-5 bg-gray-100 rounded-t-lg dark:bg-neutral-700 border-b">
                                <p class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                    {{Auth::user()->name}}
                                </p>
                                <p class="text-sm text-gray-500 dark:text-neutral-500">
                                    {{Auth::user()->email}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Dropdown -->
                </div>
            </div>
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <!-- Breadcrumb -->
    <div
        class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 lg:px-8 lg:hidden dark:bg-neutral-800 dark:border-neutral-700">
        <div class="flex items-center py-2">
            <!-- Navigation Toggle -->
            <button type="button"
                class="size-8 flex justify-center items-center gap-x-2 border border-gray-200 text-gray-800 hover:text-gray-500 rounded-lg focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-500 dark:focus:text-neutral-500"
                aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar"
                aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
                <span class="sr-only">Toggle Navigation</span>
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <rect width="18" height="18" x="3" y="3" rx="2" />
                    <path d="M15 3v18" />
                    <path d="m8 9 3 3-3 3" />
                </svg>
            </button>
            <!-- End Navigation Toggle -->

            <!-- Breadcrumb -->
            <ol class="ms-3 flex items-center whitespace-nowrap">
                <li class="flex items-center text-sm text-gray-800 dark:text-neutral-400">
                    Application Layout
                    <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-gray-400 dark:text-neutral-500" width="16"
                        height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </li>
                <li class="text-sm font-semibold text-gray-800 truncate dark:text-neutral-400" aria-current="page">
                    Dashboard
                </li>
            </ol>
            <!-- End Breadcrumb -->
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Sidebar -->
    <div id="hs-application-sidebar" class="hs-overlay  [--auto-close:lg]
      hs-overlay-open:translate-x-0
      -translate-x-full transition-all duration-300 transform
      w-[260px] h-full
      hidden
      fixed inset-y-0 start-0 z-[60]
      bg-white border-e border-gray-200
      lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
      dark:bg-neutral-800 dark:border-neutral-700" role="dialog" tabindex="-1" aria-label="Sidebar">
        <div class="relative flex flex-col h-full max-h-full">
            <div class="px-6 pt-4">
                <!-- Logo -->
                <a class="flex-none rounded-xl inline-block focus:outline-none focus:opacity-80"
                    href="#" aria-label="Asset Manager">
                    <div class="flex items-center space-x-2">
                        <img src="{{asset('vendor\fcadevelopment\resources\brand\cubo_dipak.png')}}" alt="Dipak" class="h-8 w-auto">
                        <span class="text-xl font-bold">asset<span class="font-normal">manager</span></span>
                    </div>
                </a>
                <!-- End Logo -->
            </div>

            <!-- Content -->
            <div
                class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                    <ul class="flex flex-col space-y-1">
                        <li>
                            <a class="flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm font-medium text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-700 dark:text-white"
                                href="{{route('dashboard')}}">
                                <i class="fa-solid fa-gauge-high shrink-0 size-4"></i>
                                Dashboard
                            </a>
                        </li>

                        <li class="hs-accordion" id="account-accordion">
                            <button type="button"
                                class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm font-medium text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-200"
                                aria-expanded="true" aria-controls="account-accordion-child">
                                <i class="fa-solid fa-industry shrink-0 size-4"></i>
                                Organización

                                <i class="fa-solid fa-chevron-up hs-accordion-active:block ms-auto hidden size-3"></i>
                                <i class="fa-solid fa-chevron-down hs-accordion-active:hidden ms-auto block size-3"></i>
                            </button>

                            <div id="account-accordion-child"
                                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                                role="region" aria-labelledby="account-accordion">
                                <ul class="ps-8 pt-1 space-y-1">
                                    <li>
                                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200"
                                            href="{{route('departments')}}">
                                            <i class="fa-solid fa-sitemap shrink-0 size-4"></i>
                                            Departamentos
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- End Content -->
        </div>
    </div>
    <!-- End Sidebar -->

    <!-- Content -->
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6">
            {{$slot}}
        </div>
    </div>
    <!-- End Content -->


    <!-- JS Implementing Plugins -->

    <!-- JS PLUGINS -->
    <!-- Required plugins -->
    <script src="https://cdn.jsdelivr.net/npm/preline/dist/preline.min.js"></script>

    <!-- Apexcharts -->
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>

    <script>
        window.addEventListener("load", () => {
        (function () {
          buildChart(
            "#hs-multiple-bar-charts",
            (mode) => ({
              chart: {
                type: "bar",
                height: 300,
                toolbar: {
                  show: false,
                },
                zoom: {
                  enabled: false,
                },
              },
              series: [
                {
                  name: "Chosen Period",
                  data: [
                    23000, 44000, 55000, 57000, 56000, 61000, 58000, 63000, 60000,
                    66000, 34000, 78000,
                  ],
                },
                {
                  name: "Last Period",
                  data: [
                    17000, 76000, 85000, 101000, 98000, 87000, 105000, 91000, 114000,
                    94000, 67000, 66000,
                  ],
                },
              ],
              plotOptions: {
                bar: {
                  horizontal: false,
                  columnWidth: "16px",
                  borderRadius: 0,
                },
              },
              legend: {
                show: false,
              },
              dataLabels: {
                enabled: false,
              },
              stroke: {
                show: true,
                width: 8,
                colors: ["transparent"],
              },
              xaxis: {
                categories: [
                  "January",
                  "February",
                  "March",
                  "April",
                  "May",
                  "June",
                  "July",
                  "August",
                  "September",
                  "October",
                  "November",
                  "December",
                ],
                axisBorder: {
                  show: false,
                },
                axisTicks: {
                  show: false,
                },
                crosshairs: {
                  show: false,
                },
                labels: {
                  style: {
                    colors: "#9ca3af",
                    fontSize: "13px",
                    fontFamily: "Inter, ui-sans-serif",
                    fontWeight: 400,
                  },
                  offsetX: -2,
                  formatter: (title) => title.slice(0, 3),
                },
              },
              yaxis: {
                labels: {
                  align: "left",
                  minWidth: 0,
                  maxWidth: 140,
                  style: {
                    colors: "#9ca3af",
                    fontSize: "13px",
                    fontFamily: "Inter, ui-sans-serif",
                    fontWeight: 400,
                  },
                  formatter: (value) => (value >= 1000 ? `${value / 1000}k` : value),
                },
              },
              states: {
                hover: {
                  filter: {
                    type: "darken",
                    value: 0.9,
                  },
                },
              },
              tooltip: {
                y: {
                  formatter: (value) =>
                    `$${value >= 1000 ? `${value / 1000}k` : value}`,
                },
                custom: function (props) {
                  const { categories } = props.ctx.opts.xaxis;
                  const { dataPointIndex } = props;
                  const title = categories[dataPointIndex];
                  const newTitle = `${title}`;
  
                  return buildTooltip(props, {
                    title: newTitle,
                    mode,
                    hasTextLabel: true,
                    wrapperExtClasses: "min-w-28",
                    labelDivider: ":",
                    labelExtClasses: "ms-2",
                  });
                },
              },
              responsive: [
                {
                  breakpoint: 568,
                  options: {
                    chart: {
                      height: 300,
                    },
                    plotOptions: {
                      bar: {
                        columnWidth: "14px",
                      },
                    },
                    stroke: {
                      width: 8,
                    },
                    labels: {
                      style: {
                        colors: "#9ca3af",
                        fontSize: "11px",
                        fontFamily: "Inter, ui-sans-serif",
                        fontWeight: 400,
                      },
                      offsetX: -2,
                      formatter: (title) => title.slice(0, 3),
                    },
                    yaxis: {
                      labels: {
                        align: "left",
                        minWidth: 0,
                        maxWidth: 140,
                        style: {
                          colors: "#9ca3af",
                          fontSize: "11px",
                          fontFamily: "Inter, ui-sans-serif",
                          fontWeight: 400,
                        },
                        formatter: (value) =>
                          value >= 1000 ? `${value / 1000}k` : value,
                      },
                    },
                  },
                },
              ],
            }),
            {
              colors: ["#2563eb", "#d1d5db"],
              grid: {
                borderColor: "#e5e7eb",
              },
            },
            {
              colors: ["#6b7280", "#2563eb"],
              grid: {
                borderColor: "#404040",
              },
            }
          );
        })();
      });
    </script>
    <script>
        window.addEventListener("load", () => {
        (function () {
          buildChart(
            "#hs-single-area-chart",
            (mode) => ({
              chart: {
                height: 300,
                type: "area",
                toolbar: {
                  show: false,
                },
                zoom: {
                  enabled: false,
                },
              },
              series: [
                {
                  name: "Visitors",
                  data: [180, 51, 60, 38, 88, 50, 40, 52, 88, 80, 60, 70],
                },
              ],
              legend: {
                show: false,
              },
              dataLabels: {
                enabled: false,
              },
              stroke: {
                curve: "straight",
                width: 2,
              },
              grid: {
                strokeDashArray: 2,
              },
              fill: {
                type: "gradient",
                gradient: {
                  type: "vertical",
                  shadeIntensity: 1,
                  opacityFrom: 0.1,
                  opacityTo: 0.8,
                },
              },
              xaxis: {
                type: "category",
                tickPlacement: "on",
                categories: [
                  "25 January 2023",
                  "26 January 2023",
                  "27 January 2023",
                  "28 January 2023",
                  "29 January 2023",
                  "30 January 2023",
                  "31 January 2023",
                  "1 February 2023",
                  "2 February 2023",
                  "3 February 2023",
                  "4 February 2023",
                  "5 February 2023",
                ],
                axisBorder: {
                  show: false,
                },
                axisTicks: {
                  show: false,
                },
                crosshairs: {
                  stroke: {
                    dashArray: 0,
                  },
                  dropShadow: {
                    show: false,
                  },
                },
                tooltip: {
                  enabled: false,
                },
                labels: {
                  style: {
                    colors: "#9ca3af",
                    fontSize: "13px",
                    fontFamily: "Inter, ui-sans-serif",
                    fontWeight: 400,
                  },
                  formatter: (title) => {
                    let t = title;
  
                    if (t) {
                      const newT = t.split(" ");
                      t = `${newT[0]} ${newT[1].slice(0, 3)}`;
                    }
  
                    return t;
                  },
                },
              },
              yaxis: {
                labels: {
                  align: "left",
                  minWidth: 0,
                  maxWidth: 140,
                  style: {
                    colors: "#9ca3af",
                    fontSize: "13px",
                    fontFamily: "Inter, ui-sans-serif",
                    fontWeight: 400,
                  },
                  formatter: (value) => (value >= 1000 ? `${value / 1000}k` : value),
                },
              },
              tooltip: {
                x: {
                  format: "MMMM yyyy",
                },
                y: {
                  formatter: (value) =>
                    `${value >= 1000 ? `${value / 1000}k` : value}`,
                },
                custom: function (props) {
                  const { categories } = props.ctx.opts.xaxis;
                  const { dataPointIndex } = props;
                  const title = categories[dataPointIndex].split(" ");
                  const newTitle = `${title[0]} ${title[1]}`;
  
                  return buildTooltip(props, {
                    title: newTitle,
                    mode,
                    valuePrefix: "",
                    hasTextLabel: true,
                    markerExtClasses: "!rounded-sm",
                    wrapperExtClasses: "min-w-28",
                  });
                },
              },
              responsive: [
                {
                  breakpoint: 568,
                  options: {
                    chart: {
                      height: 300,
                    },
                    labels: {
                      style: {
                        colors: "#9ca3af",
                        fontSize: "11px",
                        fontFamily: "Inter, ui-sans-serif",
                        fontWeight: 400,
                      },
                      offsetX: -2,
                      formatter: (title) => title.slice(0, 3),
                    },
                    yaxis: {
                      labels: {
                        align: "left",
                        minWidth: 0,
                        maxWidth: 140,
                        style: {
                          colors: "#9ca3af",
                          fontSize: "11px",
                          fontFamily: "Inter, ui-sans-serif",
                          fontWeight: 400,
                        },
                        formatter: (value) =>
                          value >= 1000 ? `${value / 1000}k` : value,
                      },
                    },
                  },
                },
              ],
            }),
            {
              colors: ["#2563eb", "#9333ea"],
              fill: {
                gradient: {
                  stops: [0, 90, 100],
                },
              },
              grid: {
                borderColor: "#e5e7eb",
              },
            },
            {
              colors: ["#3b82f6", "#a855f7"],
              fill: {
                gradient: {
                  stops: [100, 90, 0],
                },
              },
              grid: {
                borderColor: "#404040",
              },
            }
          );
        })();
      });
    </script>
</body>

</html>