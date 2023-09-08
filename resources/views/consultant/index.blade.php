@extends('layouts.app')
@section('content')

@extends('job-seeker.includes.sidebar')
@section('job-seeker-content')

<div class="col-xl-8 col-lg-8 col-md-7 mt-4 mt-sm-0">
    <h5 class="mb-0">Dashboard</h5>
    <div class="row">
        <div class="col-xl-3 col-lg-6 mt-4">
            <div class="card shadow border-0 p-4">
                <div class="d-flex justify-content-between mb-3">
                    <h6 class="align-items-center mb-0">Appointment <span class="badge rounded-pill bg-soft-primary ms-1">+15%</span></h6>
                    <p class="mb-0 text-muted">220+ Week</p>
                </div>
                <div id="chart-1" style="min-height: 90px;">
                    <div id="apexchartsjvszao8n" class="apexcharts-canvas apexchartsjvszao8n apexcharts-theme-light" style="width: 275px; height: 90px;"><svg id="SvgjsSvg1196" width="275" height="90" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                            <g id="SvgjsG1198" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                <defs id="SvgjsDefs1197">
                                    <clipPath id="gridRectMaskjvszao8n">
                                        <rect id="SvgjsRect1203" width="282" height="93" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                        </rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskjvszao8n"></clipPath>
                                    <clipPath id="nonForecastMaskjvszao8n"></clipPath>
                                    <clipPath id="gridRectMarkerMaskjvszao8n">
                                        <rect id="SvgjsRect1204" width="279" height="94" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                        </rect>
                                    </clipPath>
                                    <linearGradient id="SvgjsLinearGradient1209" x1="0" y1="0" x2="0" y2="1">
                                        <stop id="SvgjsStop1210" stop-opacity="0.45" stop-color="rgba(57,108,240,0.45)" offset="0.2"></stop>
                                        <stop id="SvgjsStop1211" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop>
                                        <stop id="SvgjsStop1212" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop>
                                        <stop id="SvgjsStop1213" stop-opacity="0.45" stop-color="rgba(57,108,240,0.45)" offset="1"></stop>
                                    </linearGradient>
                                </defs>
                                <line id="SvgjsLine1202" x1="0" y1="0" x2="0" y2="90" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="90" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                <g id="SvgjsG1216" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1217" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                    </g>
                                </g>
                                <g id="SvgjsG1226" class="apexcharts-grid">
                                    <g id="SvgjsG1227" class="apexcharts-gridlines-horizontal" style="display: none;">
                                        <line id="SvgjsLine1229" x1="0" y1="0" x2="275" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1230" x1="0" y1="15" x2="275" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1231" x1="0" y1="30" x2="275" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1232" x1="0" y1="45" x2="275" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1233" x1="0" y1="60" x2="275" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1234" x1="0" y1="75" x2="275" y2="75" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1235" x1="0" y1="90" x2="275" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                    </g>
                                    <g id="SvgjsG1228" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                    <line id="SvgjsLine1237" x1="0" y1="90" x2="275" y2="90" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine1236" x1="0" y1="1" x2="0" y2="90" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG1205" class="apexcharts-area-series apexcharts-plot-series">
                                    <g id="SvgjsG1206" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0">
                                        <path id="SvgjsPath1214" d="M 0 90L 0 75C 16.041666666666664 75 29.791666666666664 37.5 45.83333333333333 37.5C 61.87499999999999 37.5 75.625 45 91.66666666666666 45C 107.70833333333333 45 121.45833333333333 9 137.5 9C 153.54166666666666 9 167.29166666666666 52.5 183.33333333333331 52.5C 199.37499999999997 52.5 213.125 67.5 229.16666666666666 67.5C 245.20833333333331 67.5 258.9583333333333 52.5 275 52.5C 275 52.5 275 52.5 275 90M 275 52.5z" fill="url(#SvgjsLinearGradient1209)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskjvszao8n)" pathTo="M 0 90L 0 75C 16.041666666666664 75 29.791666666666664 37.5 45.83333333333333 37.5C 61.87499999999999 37.5 75.625 45 91.66666666666666 45C 107.70833333333333 45 121.45833333333333 9 137.5 9C 153.54166666666666 9 167.29166666666666 52.5 183.33333333333331 52.5C 199.37499999999997 52.5 213.125 67.5 229.16666666666666 67.5C 245.20833333333331 67.5 258.9583333333333 52.5 275 52.5C 275 52.5 275 52.5 275 90M 275 52.5z" pathFrom="M -1 105L -1 105L 45.83333333333333 105L 91.66666666666666 105L 137.5 105L 183.33333333333331 105L 229.16666666666666 105L 275 105">
                                        </path>
                                        <path id="SvgjsPath1215" d="M 0 75C 16.041666666666664 75 29.791666666666664 37.5 45.83333333333333 37.5C 61.87499999999999 37.5 75.625 45 91.66666666666666 45C 107.70833333333333 45 121.45833333333333 9 137.5 9C 153.54166666666666 9 167.29166666666666 52.5 183.33333333333331 52.5C 199.37499999999997 52.5 213.125 67.5 229.16666666666666 67.5C 245.20833333333331 67.5 258.9583333333333 52.5 275 52.5" fill="none" fill-opacity="1" stroke="#396cf0" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskjvszao8n)" pathTo="M 0 75C 16.041666666666664 75 29.791666666666664 37.5 45.83333333333333 37.5C 61.87499999999999 37.5 75.625 45 91.66666666666666 45C 107.70833333333333 45 121.45833333333333 9 137.5 9C 153.54166666666666 9 167.29166666666666 52.5 183.33333333333331 52.5C 199.37499999999997 52.5 213.125 67.5 229.16666666666666 67.5C 245.20833333333331 67.5 258.9583333333333 52.5 275 52.5" pathFrom="M -1 105L -1 105L 45.83333333333333 105L 91.66666666666666 105L 137.5 105L 183.33333333333331 105L 229.16666666666666 105L 275 105">
                                        </path>
                                        <g id="SvgjsG1207" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                            <g class="apexcharts-series-markers">
                                                <circle id="SvgjsCircle1243" r="0" cx="0" cy="0" class="apexcharts-marker wv5tnmoq3 no-pointer-events" stroke="#ffffff" fill="#396cf0" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1208" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine1238" x1="0" y1="0" x2="275" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1239" x1="0" y1="0" x2="275" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1240" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1241" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1242" class="apexcharts-point-annotations"></g>
                            </g>
                            <rect id="SvgjsRect1201" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                            <g id="SvgjsG1225" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                            <g id="SvgjsG1199" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 45px;"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(57, 108, 240);"></span>
                                <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->

        <div class="col-xl-3 col-lg-6 mt-4">
            <div class="card shadow border-0 p-4">
                <div class="d-flex justify-content-between mb-3">
                    <h6 class="align-items-center mb-0">Patients <span class="badge rounded-pill bg-soft-success ms-1">+20%</span></h6>
                    <p class="mb-0 text-muted">220+ Week</p>
                </div>
                <div id="chart-2" style="min-height: 90px;">
                    <div id="apexchartsomn2n0r4l" class="apexcharts-canvas apexchartsomn2n0r4l apexcharts-theme-light" style="width: 275px; height: 90px;"><svg id="SvgjsSvg1245" width="275" height="90" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                            <g id="SvgjsG1247" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                <defs id="SvgjsDefs1246">
                                    <clipPath id="gridRectMaskomn2n0r4l">
                                        <rect id="SvgjsRect1252" width="282" height="93" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                        </rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskomn2n0r4l"></clipPath>
                                    <clipPath id="nonForecastMaskomn2n0r4l"></clipPath>
                                    <clipPath id="gridRectMarkerMaskomn2n0r4l">
                                        <rect id="SvgjsRect1253" width="279" height="94" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                        </rect>
                                    </clipPath>
                                    <linearGradient id="SvgjsLinearGradient1258" x1="0" y1="0" x2="0" y2="1">
                                        <stop id="SvgjsStop1259" stop-opacity="0.45" stop-color="rgba(83,199,151,0.45)" offset="0.2"></stop>
                                        <stop id="SvgjsStop1260" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop>
                                        <stop id="SvgjsStop1261" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop>
                                        <stop id="SvgjsStop1262" stop-opacity="0.45" stop-color="rgba(83,199,151,0.45)" offset="1"></stop>
                                    </linearGradient>
                                </defs>
                                <line id="SvgjsLine1251" x1="0" y1="0" x2="0" y2="90" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="90" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                <g id="SvgjsG1265" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1266" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                    </g>
                                </g>
                                <g id="SvgjsG1275" class="apexcharts-grid">
                                    <g id="SvgjsG1276" class="apexcharts-gridlines-horizontal" style="display: none;">
                                        <line id="SvgjsLine1278" x1="0" y1="0" x2="275" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1279" x1="0" y1="18" x2="275" y2="18" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1280" x1="0" y1="36" x2="275" y2="36" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1281" x1="0" y1="54" x2="275" y2="54" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1282" x1="0" y1="72" x2="275" y2="72" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1283" x1="0" y1="90" x2="275" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                    </g>
                                    <g id="SvgjsG1277" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                    <line id="SvgjsLine1285" x1="0" y1="90" x2="275" y2="90" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine1284" x1="0" y1="1" x2="0" y2="90" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG1254" class="apexcharts-area-series apexcharts-plot-series">
                                    <g id="SvgjsG1255" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0">
                                        <path id="SvgjsPath1263" d="M 0 90L 0 90C 16.041666666666664 90 29.791666666666664 63 45.83333333333333 63C 61.87499999999999 63 75.625 54 91.66666666666666 54C 107.70833333333333 54 121.45833333333333 10.800000000000011 137.5 10.800000000000011C 153.54166666666666 10.800000000000011 167.29166666666666 27 183.33333333333331 27C 199.37499999999997 27 213.125 37.8 229.16666666666666 37.8C 245.20833333333331 37.8 258.9583333333333 81 275 81C 275 81 275 81 275 90M 275 81z" fill="url(#SvgjsLinearGradient1258)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskomn2n0r4l)" pathTo="M 0 90L 0 90C 16.041666666666664 90 29.791666666666664 63 45.83333333333333 63C 61.87499999999999 63 75.625 54 91.66666666666666 54C 107.70833333333333 54 121.45833333333333 10.800000000000011 137.5 10.800000000000011C 153.54166666666666 10.800000000000011 167.29166666666666 27 183.33333333333331 27C 199.37499999999997 27 213.125 37.8 229.16666666666666 37.8C 245.20833333333331 37.8 258.9583333333333 81 275 81C 275 81 275 81 275 90M 275 81z" pathFrom="M -1 108L -1 108L 45.83333333333333 108L 91.66666666666666 108L 137.5 108L 183.33333333333331 108L 229.16666666666666 108L 275 108">
                                        </path>
                                        <path id="SvgjsPath1264" d="M 0 90C 16.041666666666664 90 29.791666666666664 63 45.83333333333333 63C 61.87499999999999 63 75.625 54 91.66666666666666 54C 107.70833333333333 54 121.45833333333333 10.800000000000011 137.5 10.800000000000011C 153.54166666666666 10.800000000000011 167.29166666666666 27 183.33333333333331 27C 199.37499999999997 27 213.125 37.8 229.16666666666666 37.8C 245.20833333333331 37.8 258.9583333333333 81 275 81" fill="none" fill-opacity="1" stroke="#53c797" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskomn2n0r4l)" pathTo="M 0 90C 16.041666666666664 90 29.791666666666664 63 45.83333333333333 63C 61.87499999999999 63 75.625 54 91.66666666666666 54C 107.70833333333333 54 121.45833333333333 10.800000000000011 137.5 10.800000000000011C 153.54166666666666 10.800000000000011 167.29166666666666 27 183.33333333333331 27C 199.37499999999997 27 213.125 37.8 229.16666666666666 37.8C 245.20833333333331 37.8 258.9583333333333 81 275 81" pathFrom="M -1 108L -1 108L 45.83333333333333 108L 91.66666666666666 108L 137.5 108L 183.33333333333331 108L 229.16666666666666 108L 275 108">
                                        </path>
                                        <g id="SvgjsG1256" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                            <g class="apexcharts-series-markers">
                                                <circle id="SvgjsCircle1291" r="0" cx="0" cy="0" class="apexcharts-marker wfk0rui2jf no-pointer-events" stroke="#ffffff" fill="#53c797" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1257" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine1286" x1="0" y1="0" x2="275" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1287" x1="0" y1="0" x2="275" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1288" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1289" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1290" class="apexcharts-point-annotations"></g>
                            </g>
                            <rect id="SvgjsRect1250" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                            <g id="SvgjsG1274" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                            <g id="SvgjsG1248" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 45px;"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(83, 199, 151);"></span>
                                <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->

        <div class="col-xl-3 col-lg-6 mt-4">
            <div class="card shadow border-0 p-4">
                <div class="d-flex justify-content-between mb-3">
                    <h6 class="align-items-center mb-0">Urgent <span class="badge rounded-pill bg-soft-warning ms-1">+5%</span></h6>
                    <p class="mb-0 text-muted">220+ Week</p>
                </div>
                <div id="chart-3" style="min-height: 90px;">
                    <div id="apexchartsrtehzb5x" class="apexcharts-canvas apexchartsrtehzb5x apexcharts-theme-light" style="width: 275px; height: 90px;"><svg id="SvgjsSvg1293" width="275" height="90" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                            <g id="SvgjsG1295" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                <defs id="SvgjsDefs1294">
                                    <clipPath id="gridRectMaskrtehzb5x">
                                        <rect id="SvgjsRect1300" width="282" height="93" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                        </rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskrtehzb5x"></clipPath>
                                    <clipPath id="nonForecastMaskrtehzb5x"></clipPath>
                                    <clipPath id="gridRectMarkerMaskrtehzb5x">
                                        <rect id="SvgjsRect1301" width="279" height="94" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                        </rect>
                                    </clipPath>
                                    <linearGradient id="SvgjsLinearGradient1306" x1="0" y1="0" x2="0" y2="1">
                                        <stop id="SvgjsStop1307" stop-opacity="0.45" stop-color="rgba(241,181,97,0.45)" offset="0.2"></stop>
                                        <stop id="SvgjsStop1308" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop>
                                        <stop id="SvgjsStop1309" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop>
                                        <stop id="SvgjsStop1310" stop-opacity="0.45" stop-color="rgba(241,181,97,0.45)" offset="1"></stop>
                                    </linearGradient>
                                </defs>
                                <line id="SvgjsLine1299" x1="0" y1="0" x2="0" y2="90" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="90" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                <g id="SvgjsG1313" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1314" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                    </g>
                                </g>
                                <g id="SvgjsG1323" class="apexcharts-grid">
                                    <g id="SvgjsG1324" class="apexcharts-gridlines-horizontal" style="display: none;">
                                        <line id="SvgjsLine1326" x1="0" y1="0" x2="275" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1327" x1="0" y1="18" x2="275" y2="18" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1328" x1="0" y1="36" x2="275" y2="36" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1329" x1="0" y1="54" x2="275" y2="54" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1330" x1="0" y1="72" x2="275" y2="72" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1331" x1="0" y1="90" x2="275" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                    </g>
                                    <g id="SvgjsG1325" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                    <line id="SvgjsLine1333" x1="0" y1="90" x2="275" y2="90" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine1332" x1="0" y1="1" x2="0" y2="90" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG1302" class="apexcharts-area-series apexcharts-plot-series">
                                    <g id="SvgjsG1303" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0">
                                        <path id="SvgjsPath1311" d="M 0 90L 0 63C 16.041666666666664 63 29.791666666666664 54 45.83333333333333 54C 61.87499999999999 54 75.625 72 91.66666666666666 72C 107.70833333333333 72 121.45833333333333 9 137.5 9C 153.54166666666666 9 167.29166666666666 54 183.33333333333331 54C 199.37499999999997 54 213.125 72 229.16666666666666 72C 245.20833333333331 72 258.9583333333333 81 275 81C 275 81 275 81 275 90M 275 81z" fill="url(#SvgjsLinearGradient1306)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskrtehzb5x)" pathTo="M 0 90L 0 63C 16.041666666666664 63 29.791666666666664 54 45.83333333333333 54C 61.87499999999999 54 75.625 72 91.66666666666666 72C 107.70833333333333 72 121.45833333333333 9 137.5 9C 153.54166666666666 9 167.29166666666666 54 183.33333333333331 54C 199.37499999999997 54 213.125 72 229.16666666666666 72C 245.20833333333331 72 258.9583333333333 81 275 81C 275 81 275 81 275 90M 275 81z" pathFrom="M -1 90L -1 90L 45.83333333333333 90L 91.66666666666666 90L 137.5 90L 183.33333333333331 90L 229.16666666666666 90L 275 90">
                                        </path>
                                        <path id="SvgjsPath1312" d="M 0 63C 16.041666666666664 63 29.791666666666664 54 45.83333333333333 54C 61.87499999999999 54 75.625 72 91.66666666666666 72C 107.70833333333333 72 121.45833333333333 9 137.5 9C 153.54166666666666 9 167.29166666666666 54 183.33333333333331 54C 199.37499999999997 54 213.125 72 229.16666666666666 72C 245.20833333333331 72 258.9583333333333 81 275 81" fill="none" fill-opacity="1" stroke="#f1b561" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskrtehzb5x)" pathTo="M 0 63C 16.041666666666664 63 29.791666666666664 54 45.83333333333333 54C 61.87499999999999 54 75.625 72 91.66666666666666 72C 107.70833333333333 72 121.45833333333333 9 137.5 9C 153.54166666666666 9 167.29166666666666 54 183.33333333333331 54C 199.37499999999997 54 213.125 72 229.16666666666666 72C 245.20833333333331 72 258.9583333333333 81 275 81" pathFrom="M -1 90L -1 90L 45.83333333333333 90L 91.66666666666666 90L 137.5 90L 183.33333333333331 90L 229.16666666666666 90L 275 90">
                                        </path>
                                        <g id="SvgjsG1304" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                            <g class="apexcharts-series-markers">
                                                <circle id="SvgjsCircle1339" r="0" cx="0" cy="0" class="apexcharts-marker wx80jfns2 no-pointer-events" stroke="#ffffff" fill="#f1b561" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1305" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine1334" x1="0" y1="0" x2="275" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1335" x1="0" y1="0" x2="275" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1336" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1337" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1338" class="apexcharts-point-annotations"></g>
                            </g>
                            <rect id="SvgjsRect1298" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                            <g id="SvgjsG1322" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                            <g id="SvgjsG1296" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 45px;"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(241, 181, 97);"></span>
                                <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->

        <div class="col-xl-3 col-lg-6 mt-4">
            <div class="card shadow border-0 p-4">
                <div class="d-flex justify-content-between mb-3">
                    <h6 class="align-items-center mb-0">Canceled <span class="badge rounded-pill bg-soft-danger ms-1">-5%</span></h6>
                    <p class="mb-0 text-muted">220+ Week</p>
                </div>
                <div id="chart-4" style="min-height: 90px;">
                    <div id="apexcharts4fyfhzbeh" class="apexcharts-canvas apexcharts4fyfhzbeh apexcharts-theme-light" style="width: 275px; height: 90px;"><svg id="SvgjsSvg1341" width="275" height="90" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                            <g id="SvgjsG1343" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                <defs id="SvgjsDefs1342">
                                    <clipPath id="gridRectMask4fyfhzbeh">
                                        <rect id="SvgjsRect1348" width="282" height="93" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                        </rect>
                                    </clipPath>
                                    <clipPath id="forecastMask4fyfhzbeh"></clipPath>
                                    <clipPath id="nonForecastMask4fyfhzbeh"></clipPath>
                                    <clipPath id="gridRectMarkerMask4fyfhzbeh">
                                        <rect id="SvgjsRect1349" width="279" height="94" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                        </rect>
                                    </clipPath>
                                    <linearGradient id="SvgjsLinearGradient1354" x1="0" y1="0" x2="0" y2="1">
                                        <stop id="SvgjsStop1355" stop-opacity="0.45" stop-color="rgba(240,115,90,0.45)" offset="0.2"></stop>
                                        <stop id="SvgjsStop1356" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop>
                                        <stop id="SvgjsStop1357" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop>
                                        <stop id="SvgjsStop1358" stop-opacity="0.45" stop-color="rgba(240,115,90,0.45)" offset="1"></stop>
                                    </linearGradient>
                                </defs>
                                <line id="SvgjsLine1347" x1="0" y1="0" x2="0" y2="90" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="90" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                <g id="SvgjsG1361" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1362" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                    </g>
                                </g>
                                <g id="SvgjsG1371" class="apexcharts-grid">
                                    <g id="SvgjsG1372" class="apexcharts-gridlines-horizontal" style="display: none;">
                                        <line id="SvgjsLine1374" x1="0" y1="0" x2="275" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1375" x1="0" y1="18" x2="275" y2="18" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1376" x1="0" y1="36" x2="275" y2="36" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1377" x1="0" y1="54" x2="275" y2="54" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1378" x1="0" y1="72" x2="275" y2="72" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1379" x1="0" y1="90" x2="275" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                    </g>
                                    <g id="SvgjsG1373" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                    <line id="SvgjsLine1381" x1="0" y1="90" x2="275" y2="90" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine1380" x1="0" y1="1" x2="0" y2="90" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG1350" class="apexcharts-area-series apexcharts-plot-series">
                                    <g id="SvgjsG1351" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0">
                                        <path id="SvgjsPath1359" d="M 0 90L 0 81C 16.041666666666664 81 29.791666666666664 63 45.83333333333333 63C 61.87499999999999 63 75.625 45 91.66666666666666 45C 107.70833333333333 45 121.45833333333333 9 137.5 9C 153.54166666666666 9 167.29166666666666 36 183.33333333333331 36C 199.37499999999997 36 213.125 63 229.16666666666666 63C 245.20833333333331 63 258.9583333333333 45 275 45C 275 45 275 45 275 90M 275 45z" fill="url(#SvgjsLinearGradient1354)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask4fyfhzbeh)" pathTo="M 0 90L 0 81C 16.041666666666664 81 29.791666666666664 63 45.83333333333333 63C 61.87499999999999 63 75.625 45 91.66666666666666 45C 107.70833333333333 45 121.45833333333333 9 137.5 9C 153.54166666666666 9 167.29166666666666 36 183.33333333333331 36C 199.37499999999997 36 213.125 63 229.16666666666666 63C 245.20833333333331 63 258.9583333333333 45 275 45C 275 45 275 45 275 90M 275 45z" pathFrom="M -1 108L -1 108L 45.83333333333333 108L 91.66666666666666 108L 137.5 108L 183.33333333333331 108L 229.16666666666666 108L 275 108">
                                        </path>
                                        <path id="SvgjsPath1360" d="M 0 81C 16.041666666666664 81 29.791666666666664 63 45.83333333333333 63C 61.87499999999999 63 75.625 45 91.66666666666666 45C 107.70833333333333 45 121.45833333333333 9 137.5 9C 153.54166666666666 9 167.29166666666666 36 183.33333333333331 36C 199.37499999999997 36 213.125 63 229.16666666666666 63C 245.20833333333331 63 258.9583333333333 45 275 45" fill="none" fill-opacity="1" stroke="#f0735a" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask4fyfhzbeh)" pathTo="M 0 81C 16.041666666666664 81 29.791666666666664 63 45.83333333333333 63C 61.87499999999999 63 75.625 45 91.66666666666666 45C 107.70833333333333 45 121.45833333333333 9 137.5 9C 153.54166666666666 9 167.29166666666666 36 183.33333333333331 36C 199.37499999999997 36 213.125 63 229.16666666666666 63C 245.20833333333331 63 258.9583333333333 45 275 45" pathFrom="M -1 108L -1 108L 45.83333333333333 108L 91.66666666666666 108L 137.5 108L 183.33333333333331 108L 229.16666666666666 108L 275 108">
                                        </path>
                                        <g id="SvgjsG1352" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                            <g class="apexcharts-series-markers">
                                                <circle id="SvgjsCircle1387" r="0" cx="0" cy="0" class="apexcharts-marker wdphr7evgh no-pointer-events" stroke="#ffffff" fill="#f0735a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1353" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine1382" x1="0" y1="0" x2="275" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1383" x1="0" y1="0" x2="275" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1384" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1385" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1386" class="apexcharts-point-annotations"></g>
                            </g>
                            <rect id="SvgjsRect1346" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                            <g id="SvgjsG1370" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                            <g id="SvgjsG1344" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 45px;"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(240, 115, 90);"></span>
                                <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-xl-4 col-lg-6 mt-4">
            <div class="card border-0 shadow rounded">
                <div class="d-flex justify-content-between p-4 border-bottom">
                    <h6 class="mb-0"><i class="uil uil-calender text-primary me-1 h5"></i> Past Appointment</h6>
                    <h6 class="text-muted mb-0">{{count($pastAppointments)}} Appintments</h6>
                </div>
                <ul class="list-unstyled mb-0 p-4" style="height: 250px; overflow-y: scroll;">
                    @foreach ($pastAppointments as $appintment)
                    @php
                    $date = \Carbon\Carbon::parse($appintment['date']);
                    $fromTime = \Carbon\Carbon::parse($appintment['from']);
                    $toTime = \Carbon\Carbon::parse($appintment['to']);
                    @endphp
                    <li>
                        <a href="javascript:void(0)">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-inline-flex">
                                    <img src="{{asset('assets/images/client/01.jpg')}}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                    <div class="ms-3">
                                        <h6 class="text-dark mb-0 d-block">{{$appintment['consultant']}}</h6>
                                        <small class="text-muted">{{$date->format('F j, Y') . ' from ' .
                                            $fromTime->format('g:i A') . ' to ' . $toTime->format('g:i A');
                                            }}</small>
                                    </div>
                                </div>
                                <i class="uil uil-arrow-right h4 text-dark"></i>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
                <br><br>
                <a href="{{route('jobSeeker.appointments')}}">See All</a>
            </div>
        </div>
        <!--end col-->

        <div class="col-xl-4 col-lg-6 mt-4">
            <div class="card border-0 shadow rounded">
                <div class="d-flex justify-content-between p-4 border-bottom">
                    <h6 class="mb-0"><i class="uil uil-calender text-primary me-1 h5"></i> Upcomming Appointment</h6>
                    <h6 class="text-muted mb-0">{{count($upcomingAppointments)}} Appintments</h6>
                </div>

                <ul class="list-unstyled mb-0 p-4" style="height: 250px; overflow-y: scroll;">
                    @foreach ($upcomingAppointments as $appintment)
                    @php
                    $date = \Carbon\Carbon::parse($appintment['date']);
                    $fromTime = \Carbon\Carbon::parse($appintment['time_from']);
                    $toTime = \Carbon\Carbon::parse($appintment['time_to']);
                    @endphp
                    <li>
                        <a href="javascript:void(0)">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-inline-flex">
                                    <img src="{{asset('assets/images/client/01.jpg')}}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                    <div class="ms-3">
                                        <h6 class="text-dark mb-0 d-block">{{$appintment['consultant']}}</h6>
                                        <small class="text-muted">{{$date->format('F j, Y') . ' from ' .
                                            $fromTime->format('g:i A') . ' to ' . $toTime->format('g:i A');
                                            }}</small>
                                    </div>
                                </div>
                                <i class="uil uil-arrow-right h4 text-dark"></i>
                            </div>
                        </a>
                    </li>
                    @endforeach

                </ul>

                <br><br>
                <a href="{{route('jobSeeker.appointments')}}">See All</a>
            </div>
        </div>
        <!--end col-->

        <div class="col-xl-4 col-lg-6 mt-4">
            <div class="card border-0 shadow rounded">
                <div class="d-flex justify-content-between p-4 border-bottom">
                    <h6 class="mb-0"><i class="uil uil-calender text-primary me-1 h5"></i> Cacelled Appointment</h6>
                    <h6 class="text-muted mb-0">{{count($cancelledAppointments)}} Appintments</h6>
                </div>

                <ul class="list-unstyled mb-0 p-4" style="height: 250px; overflow-y: scroll;">
                    @foreach ($cancelledAppointments as $appintment)
                    @php
                    $date = \Carbon\Carbon::parse($appintment['date']);
                    $fromTime = \Carbon\Carbon::parse($appintment['from']);
                    $toTime = \Carbon\Carbon::parse($appintment['to']);
                    @endphp
                    <li>
                        <a href="javascript:void(0)">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-inline-flex">
                                    <img src="{{asset('assets/images/client/01.jpg')}}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                    <div class="ms-3">
                                        <h6 class="text-dark mb-0 d-block">{{$appintment['consultant']}}</h6>
                                        <small class="text-muted">{{$date->format('F j, Y') . ' from ' .
                                            $fromTime->format('g:i A') . ' to ' . $toTime->format('g:i A');
                                            }}</small>
                                    </div>
                                </div>
                                <i class="uil uil-arrow-right h4 text-dark"></i>
                            </div>
                        </a>
                    </li>
                    @endforeach

                </ul>

                <br><br>
                <a href="{{route('jobSeeker.appointments')}}">See All</a>
            </div>
        </div>
        <!--end col-->

    </div>
    <!--end row-->
</div>

@endsection
@endsection