<?php $__env->startSection('content'); ?>
    <div class="bg-gray-100 shadow-md rounded-md w-full sm:w-8/12 sm:p-6 p-4 sm:mt-10 mt-2">
        <div class="flex sm:flex-row flex-col-reverse flex-wrap justify-between w-full">
            <div class="sm:w-2/4 w-full mb-3 sm:ml-4 ml-0">
                <form method="POST" action="/students/login">
                    <?php echo csrf_field(); ?>
                    <h1 class="text-3xl text-purple-700 font-semibold">Login form</h1>

                    <div class="w-full mt-6">
                        <label class="block uppercase tracking-wide text-gray-600 mb-1 text-xs" for="grid-first-name">
                            Email address
                        </label>
                        <input
                            class="w-full text-gray-700 shadow-sm border-b-2 border-gray-7600 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-purple-600"
                            name="email" type="text" placeholder="me@jane.com">
                    </div>
                    <div class="w-full mt-3">
                        <label class="block uppercase tracking-wide text-gray-600 mb-1 text-xs" for="grid-first-name">
                            password
                        </label>
                        <input
                            class="w-full text-gray-700 shadow-sm border-b-2 border-gray-7600 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-purple-600"
                            name="password" type="password" placeholder="testtest8">
                    </div>
                    <div class="flex w-full justify-end items-end mt-1 sm:mt-4">
                        <button type="submit"
                                class="bg-white hover:bg-purple-600 hover:text-white hover:border-purple-400 focus:outline-none text-gray-800 font-semibold text-sm py-1 px-3 my-2 border-b-2 border-purple-600 rounded-md shadow-md">
                            Login
                        </button>
                    </div>
                </form>
            </div>
            <div class="sm:w-1/3 w-full sm:my-4 mt-0 mb-4 sm:mr-4 mr-0">
                <svg class="fill-current w-full" id="ada2c66c-0b07-40f7-a84b-c9b183e7e59f" data-name="Layer 1"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 898.00854 831.08793"><title>celebrating</title>
                    <path
                        d="M861.5001,60.92084s26.4648-20.11325,82.57019,7.41015,96.33188,4.23437,96.33188,4.23437l-6.35155,92.09751s-57.164,22.23044-110.09359-9.52733-69.86708,0-69.86708,0Z"
                        transform="translate(-150.99573 -34.45604)" fill="#8e5bb3"/>
                    <path
                        d="M912.31252,481.18193A310.36759,310.36759,0,0,1,717.47865,769.18251a303.7656,303.7656,0,0,1-32.11772,10.8717,312.15885,312.15885,0,0,1-166.34719.02119q-11.1628-3.09641-21.97632-6.99728A306.3551,306.3551,0,0,1,449.623,751.30287c-94.1194-53.23657-157.64553-154.258-157.64553-270.12094A309.988,309.988,0,0,1,587.727,171.34259q7.17728-.33349,14.418-.32816,7.95533,0,15.826.39167A310.126,310.126,0,0,1,912.31252,481.18193Z"
                        transform="translate(-150.99573 -34.45604)" fill="#8e5bb3"/>
                    <path
                        d="M992.24967,172.31544c-20.37377.001-44.66246-4.085-68.04349-18.11392-21.39411-12.83646-39.1276-17.077-52.70838-12.60541a27.70636,27.70636,0,0,0-16.43092,13.94571L852.316,162.157,863.32472,53.22847l.28532-.27033c.93558-.889,23.5878-21.43132,82.86275,7.64843,58.0551,28.47965,100.39052,4.7523,100.8092,4.50884l1.72228-.9945-.13543,1.98383L1042.11,164.10567l-.62647.24345C1041.13,164.48661,1020.44192,172.31441,992.24967,172.31544ZM882.766,137.75871c12.05906,0,26.30354,4.89186,42.52977,14.62749,51.84517,31.107,108.24932,12.54856,114.79522,10.21841l6.5366-94.77759c-8.59382,4.14339-48.58462,20.43579-101.08728-5.31932C891.06211,35.78083,868.09355,52.03136,865.3499,54.254L855.622,150.50214a30.48,30.48,0,0,1,15.21416-10.91725A37.93376,37.93376,0,0,1,882.766,137.75871Z"
                        transform="translate(-150.99573 -34.45604)" fill="#3f3d56"/>
                    <path
                        d="M595.79346,790.29084a330.7856,330.7856,0,0,1-88.52166-12.0053c-7.97976-2.21333-15.85356-4.72025-23.40326-7.4515a327.22762,327.22762,0,0,1-50.48886-23.18771,330.46449,330.46449,0,0,1,16.63923-584.0772,327.0522,327.0522,0,0,1,130.4229-33.49038c10.22513-.47657,21.055-.473,32.20126.0672A330.35227,330.35227,0,0,1,718.6067,766.68651,325.28647,325.28647,0,0,1,684.404,778.26383,330.94733,330.94733,0,0,1,595.79346,790.29084Zm0-658.44432c-5.16839,0-10.30059.11681-15.25447.34735a324.93725,324.93725,0,0,0-129.585,33.27484A328.33429,328.33429,0,0,0,484.58753,768.842c7.5006,2.71471,15.32219,5.20508,23.25026,7.4029a330.26994,330.26994,0,0,0,176.00077-.02171,322.94573,322.94573,0,0,0,33.97936-11.50185A328.21788,328.21788,0,0,0,612.53866,132.26055C606.86216,131.98608,601.22754,131.84652,595.79346,131.84652Z"
                        transform="translate(-150.99573 -34.45604)" fill="#3f3d56"/>
                    <rect y="827.45886" width="484.35502" height="2.11718" fill="#3f3d56"/>
                    <path
                        d="M233.739,863.69056l-1.13613-.42591c-.24966-.09408-25.09763-9.61417-36.73749-31.20056-11.64038-21.58742-5.94062-47.57876-5.8817-47.83823l.26827-1.18368,1.13561.42591c.24966.09408,25.09711,9.61417,36.73749,31.20056,11.64038,21.58742,5.94062,47.57876,5.8817,47.83823Zm-36.00971-32.63131c9.84108,18.25142,29.47673,27.60714,34.4518,29.74293.94591-5.33225,3.91235-26.89486-5.91995-45.12869-9.83126-18.23177-29.47466-27.602-34.4518-29.74293C190.863,791.26591,187.89755,812.82645,197.72933,831.05925Z"
                        transform="translate(-150.99573 -34.45604)" fill="#3f3d56"/>
                    <path
                        d="M204.761,824.49193c20.91838,12.58519,28.97471,37.58285,28.97471,37.58285s-25.85906,4.593-46.77744-7.99216-28.97471-37.58285-28.97471-37.58285S183.84259,811.90674,204.761,824.49193Z"
                        transform="translate(-150.99573 -34.45604)" fill="#8e5bb3"/>
                    <circle cx="362.4569" cy="154.57928" r="99.09218" fill="#2f2e41"/>
                    <circle cx="383.08915" cy="182.17184" r="70.20593" fill="#a0616a"/>
                    <path
                        d="M478.18016,232.2292s-10.40088,83.207-48.10406,100.10845,104.00878,7.80065,104.00878,7.80065,0-75.40636,5.20044-78.00658S478.18016,232.2292,478.18016,232.2292Z"
                        transform="translate(-150.99573 -34.45604)" fill="#a0616a"/>
                    <path
                        d="M462.57884,782.17562l-5.20044,27.3023s-72.80614,42.90363-37.70318,54.60461,78.00659-50.70428,78.00659-50.70428l-7.80066-31.20263Z"
                        transform="translate(-150.99573 -34.45604)" fill="#a0616a"/>
                    <path
                        d="M513.28312,576.75828,570.488,637.86344,727.80123,528.65422s-36.40307-28.60242-48.10406-28.60242S513.28312,576.75828,513.28312,576.75828Z"
                        transform="translate(-150.99573 -34.45604)" fill="#a0616a"/>
                    <path d="M822.70924,255.63117s16.90143-118.31,46.80395-109.20922S852.61177,272.5326,852.61177,272.5326Z"
                          transform="translate(-150.99573 -34.45604)" fill="#a0616a"/>
                    <path
                        d="M612.09146,318.03644s-56.73081-9.10077-77.76957,0-84.59089,16.34179-92.46817,6.22073-78.08322,23.68179-78.08322,37.983S515.88334,592.3596,515.88334,592.3596s157.31328-44.20374,178.115-91.00769c0,0-18.20154-13.00109-18.20154-23.402s-9.10077-20.80176-9.10077-20.80176S677.097,431.146,658.89541,407.744,612.09146,318.03644,612.09146,318.03644Z"
                        transform="translate(-150.99573 -34.45604)" fill="#d0cde1"/>
                    <path
                        d="M595.19,321.93677l16.90142-3.90033s41.60352,10.40088,70.20593,45.50384S760.304,410.34423,760.304,410.34423l59.805-162.51372,49.40417,16.90143s-39.00329,206.71745-83.207,209.31767-153.41295-45.50384-153.41295-45.50384Z"
                        transform="translate(-150.99573 -34.45604)" fill="#d0cde1"/>
                    <path
                        d="M384.57226,349.23907S357.27,350.53918,357.27,373.94116s3.90033,104.00878,27.30231,139.11174S428.776,627.46256,430.0761,628.76267s26.00219,165.11394,26.00219,165.11394l41.60352-3.90033-7.80066-204.11723-40.3034-104.00878Z"
                        transform="translate(-150.99573 -34.45604)" fill="#d0cde1"/>
                    <path
                        d="M843.77927,675.65586a310.83022,310.83022,0,0,1-126.30062,93.52665l-6.57388-14.31218-25.54384,25.18388a312.15885,312.15885,0,0,1-166.34719.02119l-10.93521-6.99728,58.50835-67.61227s1.30211-33.80084,0-38.99857-18.36655-52.38971-18.36655-52.38971c59.29176-3.758,144.07437-78.971,163.7113-97.10464,2.6994-2.49826,4.17086-3.91681,4.17086-3.91681,109.20434,15.59305,124.808,143.00525,124.808,143.00525Z"
                        transform="translate(-150.99573 -34.45604)" fill="#2f2e41"/>
                    <ellipse cx="312.47371" cy="184.72433" rx="6.35155" ry="13.2324" fill="#a0616a"/>
                    <circle cx="272.24721" cy="60.33975" r="41.28509" fill="#2f2e41"/>
                    <path
                        d="M379.84066,75.74113a41.28454,41.28454,0,0,1,36.52143-41.003,41.28514,41.28514,0,1,0,0,82.006A41.28454,41.28454,0,0,1,379.84066,75.74113Z"
                        transform="translate(-150.99573 -34.45604)" fill="#2f2e41"/>
                    <rect x="699.91844" y="24.34762" width="14.82029" height="155.61305" fill="#2f2e41"/>
                    <path
                        d="M449.70775,156.19414s19.05465,40.2265,42.34368,41.28509S602.145,181.60035,602.145,181.60035l-28.582-59.28116-76.21864,9.52733Z"
                        transform="translate(-150.99573 -34.45604)" fill="#2f2e41"/>
                </svg>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jawana\Desktop\teethStudents\resources\views/students/login.blade.php ENDPATH**/ ?>