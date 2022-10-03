<!DOCTYPE html>
<html>
<head>
    <title>Test Data</title>
    <style>
        span{
            border:1px solid black;
            display: block;
            font-size: 18px;
        }
    </style>
</head>
<body>
<span>Laravel Helpers Functions</span>
<span>
    <pre>
        <code>
                function isAllowMessage(){
                    return Auth::user()->UserTreatments()->whereIn('consultancy_status',['PENDING', 'IN_PROGRESS'])->count();
                }

                function is_main_admin($user){

                    if (in_array(Constants::ADMIN_ROLE, $user->roles()->pluck('name')->toArray())){
                        return true;
                    }
                    return false;
                }

                function auth_admin_role(){
                    if (Auth::guard('admin')){
                        return Auth::guard('admin')->user()->roles()->first()->name;
                    }
                    return false;
                }

                function is_allowed($permission){
                    return Auth::guard('admin')->user()->can($permission);
                }


                /**
                 * Used to return success response in json
                */
                function sendSuccess($message, $data = null)
                {
                    return  response()->json([
                        'status' => true,
                        'statusCode' => 200,
                        'message' => $message,
                        'data' => $data
                    ], 200);
                }

                /**
                 * Used to return error response in json
                */
                function sendError($message, $data = null, $statusCode = 400)
                {
                    return response()->json([
                        'status' => false,
                        'statusCode' => $statusCode,
                        'message' => $message,
                        'data' => $data,
                    ], 200);
                }
        </code>
    </pre>
    <pre>
        <p style="font-size: 22px;font-weight: bold;text-align: center">Add Image File Code</p>
        <code>
            function addFile($file, $path)
            {
                if ($file) {
                    if ($file->getClientOriginalExtension() != 'exe') {
                        $type = $file->getClientMimeType();
                        if ($type == 'image/jpg' || $type == 'image/jpeg' || $type == 'image/png' || $type == 'image/bmp') {
                            $destination_path = $path;
                            if (!file_exists('public/' . $destination_path)) {
                                mkdir('public/' . $destination_path, 777, true);
                            }

                            $extension = $file->getClientOriginalExtension();
                            $fileName =  Str::random(15) . '.' . $extension;
                            $img = Image::make($file);
                            if (($img->filesize() / 1000) > 2000) {
                                Image::make($file)->save('public/' . $destination_path . $fileName, 30);
                                $file_path = $destination_path . $fileName;
                            } else {
                                $file->move('public/' . $destination_path, $fileName);
                                $file_path = $destination_path . $fileName;
                            }
                            return $file_path;
                        } else {
                            return FALSE;
                        }
                    } else {
                        return FALSE;
                    }
                } else {
                    return FALSE;
                }
            }
        </code>
    </pre>

    <pre>
        <p style="font-size: 22px;font-weight: bold;text-align: center">Time Functions</p>
        <code>
            function convertIntoword($n)
            {
                if ($n < 1000) return $n;
                $suffix = ['', 'K', 'M', 'G', 'T', 'P', 'E', 'Z', 'Y'];
                $power = floor(log($n, 1000));
                return round($n / (1000 ** $power), 1, PHP_ROUND_HALF_EVEN) . $suffix[$power];
            };

            function getTimeDifference($t1, $t2)
            {
                $startTime = Carbon::parse($t1);
                $endTime = Carbon::parse($t2);
                $totalDuration = $endTime->diffInHours($startTime);
                return  $totalDuration;
            }

            function getTimeDifferenceInMinute($t1, $t2)
            {
                $startTime = Carbon::parse($t1);
                $endTime = Carbon::parse($t2);
                $totalDuration = $endTime->diffInMinutes($startTime);
                return  $totalDuration;
            }

            function convertUTCTimezone($dateTime, $tzFrom)
            {
                return Carbon::parse($dateTime)->shiftTimezone($tzFrom)->setTimezone('UTC');
            }

            function convertUTCToLocal($endTime)
            {
                $userTimeZone = auth()->user()->time_zone; // We'll come to this later
                $time = Carbon::parse($endTime)->shiftTimezone($userTimeZone);
                return $time->setTimezone($userTimeZone)->format('H:i:s');
            }
            function dateDiffInDays($date)
            {
                return now()->diffInDays(Carbon::parse($date));
            }
        </code>
    </pre>

    <pre>
        <p style="font-size: 22px;font-weight: bold;text-align: center">Validations</p>
        <code>
           return  [
                'user_name' => 'required|regex:/^\S*$/u|string|max:50|unique:users',
                'first_name' => 'required|regex:/^[a-zA-Z]+$/u|max:50',
                'last_name' => 'nullable|regex:/^[a-zA-Z]+$/u|max:50',
                'email' => 'required|email|unique:users',
                'social_login_id' => 'string',
                'password' => 'required_without:social_login_id|min:8|max:16|string|regex:/[a-z]/|regex:/[A-Z]/|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/|confirmed',
                'social_login_type' => 'required_with:social_login_id',
                'user_type' => 'required|integer',
                'avatar' => 'nullable|image|mimes:jpg,bmp,jpeg,png,svg,gif,webp|max:1024',
                'avatar_thumbnail' => 'required_with:avatar|image|mimes:jpg,jpeg,bmp,png,svg,gif,webp|max:500',
                'last_lat' => '',
                'last_long' => '',
                'fit_pro_experience_id' => 'required_if:user_type, == , '.Constants::USER_FIT_PRO.'|exists:experiences,id',
                'fit_pro_is_certified' => 'required_if:user_type, ==, '.Constants::USER_FIT_PRO.'|boolean',
                'fit_pro_status' => 'required_if:user_type, ==,'.Constants::USER_FIT_PRO.'|integer',
                'fit_pro_zip_code' => 'required_if:fit_pro_status, ==,'.Constants::FIT_PRO_STATUS_PHYSICAL.'|integer',
                'fit_pro_address' => 'nullable',
                'interest_id'=> 'required_if:user_type, ==,'.Constants::USER_FIT_PRO.'|exists:interests,id',
                'is_skill' => 'required_if:user_type, ==,'.Constants::USER_FIT_PRO.'|integer',
            ];
        </code>
    </pre>

    <pre>
        <p style="font-size: 22px;font-weight: bold;text-align: center">Sockets</p>
        <code>
           {
              "name": "chat",
              "version": "1.0.0",
              "description": "",
              "main": "index.js",
              "scripts": {
                "test": "echo \"Error: no test specified\" && exit 1"
              },
              "keywords": [],
              "author": "",
              "license": "ISC",
              "dependencies": {
                "express": "^4.18.1",
                "nanoid": "^3.3.4",
                "socket.io": "^2.4.1"
              }
            }




            const app = require("express")();
            const server = require("http").createServer(app);

            const io = require("socket.io")(server);

            app.get("/", (req, res) => {
                res.sendFile(__dirname + "/index.html");
            });

            io.on("connection", (socket) => {
                socket.on("new_message_send", (data) => {
                    io.emit("new_message_receive", {
                        chat_id: data.chat_id,
                        sender_id: data.sender_id,
                        receiver_id: data.receiver_id,
                        content: data.content,
                        type: data.type,
                        created_at: data.created_at,
                    });
                });
            });

            server.listen(5221, () => console.log("server is start....."));

        </code>
    </pre>

    <pre>
        <p style="font-size: 22px;font-weight: bold;text-align: center">Auth Module API</p>
        <code>
            <p style="font-size: 22px;font-weight: bold;text-align: center">Route</p>

            Route::controller(AuthController::class)->group(function () {
                Route::post('/sign-up', 'register');
                Route::post('/login', 'login');
                Route::post('/check-username', 'checkUserName');
                Route::post('/social-login', 'socialLogin');
                Route::post('/sent-otp', 'sendOtpCode');
                Route::post('/verify-otp', 'verifyOtpCode');
                Route::post('/recover-password', 'recoverPassword');
                Route::get('/term-and-privacy', 'termAndprivacy');
                Route::post('/check-email', 'checkEmailExist');
            });
        </code>
    </pre>

    <div style="display: flex">
        <pre style="width: 40%;">
            <code>
                <p style="font-size: 22px;font-weight: bold;text-align: center">Auth Controller</p>
                public $authService;

                /**
                 * __construct
                 *
                 * @param  mixed $authService
                 * @return void
                 */
                public function __construct(AuthService $authService)
                {
                    $this->authService = $authService;
                }

                /**
                 * register
                 *
                 * @param  mixed $request
                 * @return App/Models/User
                 */
                public function register(UserStoreRequest $request)
                {
                    return $this->authService->register($request);
                }

                /**
                 * login
                 *
                 * @param  mixed $request
                 * @return App/Models/User
                 */
                public function login(LoginRequest $request)
                {
                    return $this->authService->login($request);
                }

                /**
                 * checkUserName
                 *
                 * @param  mixed $request
                 * @return void
                 */
                public function checkUserName(CheckUserNameRequest $request)
                {
                    return $this->authService->checkUserName($request);
                }

                /**
                 * socialLogin
                 *
                 * @param  mixed $request
                 * @return App/Models/User
                 */
                public function socialLogin(CheckUserAvailabilityRequest $request)
                {
                    return $this->authService->socialLogin($request);
                }

                /**
                 * sendOtpCode
                 *
                 * @param  mixed $request
                 * @return App/Models/User
                 */
                public function sendOtpCode(ForgetPasswordRequest $request)
                {
                    return $this->authService->sendOtpCode($request);
                }

                /**
                 * verifyOtpCode
                 *
                 * @param  mixed $request
                 * @return App/Models/User
                 */
                public function verifyOtpCode(OtpCodeVerification $request)
                {
                    return $this->authService->verifyOtpCode($request);
                }

                /**
                 * recoverPassword
                 *
                 * @param  mixed $request
                 * @return void
                 */
                public function recoverPassword(ResetPasswordRequest $request)
                {
                    return $this->authService->recoverPassword($request);
                }

                /**
                 * logout
                 *
                 * @return void
                 */
                public function logout()
                {
                    return $this->authService->logout();
                }

                /**
                 * change password
                 *
                 * @return void
                 */
                public function changePassword(ChangePasswordRequest $request)
                {
                    return $this->authService->changePassword($request);
                }

                /**
                 * change password
                 *
                 * @return void
                 */
                public function checkEmailExist(CheckEmailExistRequest $request)
                {
                    return sendSuccess('Email is available', null);
                }
            </code>
        </pre>

        <pre style="width: 60%;">
        <p style="font-size: 22px;font-weight: bold;text-align: center;margin-top: 18%">Every Controller COnsist of Validation request in it</p>
        <code>
            <p style="font-size: 22px;font-weight: bold;text-align: center">Requests</p>
                use App\CommanFunctions\Constants;
                use Illuminate\Foundation\Http\FormRequest;

                class UserStoreRequest extends FormRequest
                {
                    /**
                     * Determine if the user is authorized to make this request.
                     *
                     * @return bool
                     */
                    public function authorize()
                    {
                        return true;
                    }

                    /**
                     * Get the validation rules that apply to the request.
                     *
                     * @return array
                     */
                    public function rules()
                    {
                       return  [
                            'user_name' => 'required|regex:/^\S*$/u|string|max:50|unique:users',
                            'first_name' => 'required|regex:/^[a-zA-Z]+$/u|max:50',
                            'last_name' => 'nullable|regex:/^[a-zA-Z]+$/u|max:50',
                            'email' => 'required|email|unique:users',
                            'social_login_id' => 'string',
                            'password' => 'required_without:social_login_id|min:8|max:16|string|regex:/[a-z]/|regex:/[A-Z]/|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/|confirmed',
                            'social_login_type' => 'required_with:social_login_id',
                            'user_type' => 'required|integer',
                            'avatar' => 'nullable|image|mimes:jpg,bmp,jpeg,png,svg,gif,webp|max:1024',
                            'avatar_thumbnail' => 'required_with:avatar|image|mimes:jpg,jpeg,bmp,png,svg,gif,webp|max:500',
                            'last_lat' => '',
                            'last_long' => '',
                            'fit_pro_experience_id' => 'required_if:user_type, == , '.Constants::USER_FIT_PRO.'|exists:experiences,id',
                            'fit_pro_is_certified' => 'required_if:user_type, ==, '.Constants::USER_FIT_PRO.'|boolean',
                            'fit_pro_status' => 'required_if:user_type, ==,'.Constants::USER_FIT_PRO.'|integer',
                            'fit_pro_zip_code' => 'required_if:fit_pro_status, ==,'.Constants::FIT_PRO_STATUS_PHYSICAL.'|integer',
                            'fit_pro_address' => 'nullable',
                            'interest_id'=> 'required_if:user_type, ==,'.Constants::USER_FIT_PRO.'|exists:interests,id',
                            'is_skill' => 'required_if:user_type, ==,'.Constants::USER_FIT_PRO.'|integer',
                        ];

                    }

                    /**
                     * message
                     *
                     * @return void
                     */
                    public function messages()
                    {
                        return [
                            'user_name.regex' => 'Space is not allowed in username',
                            'first_name.regex' => 'Special characters and numbers are not allowed in first name',
                            'last_name.regex' => 'Special characters and numbers are not allowed in last name',
                            'password.regex' => 'Password must be combination of Uppercase letters, Lowercase letters, Symbols and Numbers'
                        ];
                    }
                }
        </code>
    </pre>
    </div>

    <pre style="width: 40%;">
            <code>
                <p style="font-size: 22px;font-weight: bold;text-align: center">Auth Service</p>
                /**
                 * register
                 *
                 * @param  mixed $request
                 * @return App/Models/User
                 */
                public function register($request)
                {
                    DB::beginTransaction();
                    try {
                        $input = $request->except(['token']);
                        $avatar = Null;
                        $avatarThumbnail = Null;
                        if ($request->hasFile('avatar')) {
                            $avatar = addFile($request->avatar, 'images/user_profile/');
                            $avatarThumbnail = addFile($request->avatar_thumbnail, 'images/user_profile/',);
                        }
                        $input['avatar'] = $avatar;
                        $input['avatar_thumbnail'] = $avatarThumbnail;
                        if (isset($input['social_login_id']) && $input['social_login_id']) {
                            $input['password'] = '1234abcfyfer';
                            $input['email_verified_at'] = now();
                        } else {
                            $input['password'] = bcrypt($input['password']);
                        }
                        $user = User::create($input);
                        $user->userMeta()->create($input);
                        $user->userPrivacySetting()->create($input);
                        $user->notificationSetting()->create($input);
                        if ($input['user_type'] == Constants::USER_FIT_PRO) {
                            $this->addFitProSkill($request, $user);
                        }
                        $stripeCustomer = $user->createAsStripeCustomer();
                        $user['stripe_id'] = $stripeCustomer->id;
                        $user->save();
                        $tokenResult = $user->createToken('Personal Access Token');
                        $user['access_token'] = $tokenResult->accessToken;
                        $user['token_type'] = 'Bearer';
                        DB::commit();

                        return sendSuccess('user created successfully', $user);
                    } catch (\Exception $e) {
                        DB::rollback();

                        return sendError('Failed to create User', $e->getMessage());
                    }
                }

                /**
                 * login
                 *
                 * @param  mixed $request
                 * @return App/Models/User
                 */
                public function login($request)
                {
                    $field = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';
                    $request->merge([$field => $request->input('login')]);
                    if (Auth::attempt($request->only($field, 'password'))) {
                        $user = Auth::user();
                        if ($user->is_blocked == Constants::BLOCKED_USER) {
                            Auth::logout();
                            return sendError('Your account has been blocked. Please contact with customer support.', null);
                        }
                        $tokenResult = $user->createToken('Personal Access Token');
                        $user['access_token'] = $tokenResult->accessToken;
                        $user['token_type'] = 'Bearer';

                        return sendSuccess('Login successfully', $user);
                    }

                    return sendError('Email or password is incorrect', null);
                }

                /**
                 * checkUserName
                 *
                 * @param  mixed $request
                 * @return App/Models/User
                 */
                public function checkUserName($request)
                {
                    $user = User::where('user_name', '=', $request->user_name)->first();
                    if ($user) {
                        return sendError('User Name is already exists', null);
                    }

                    return sendSuccess('User Name is available', null);
                }

                /**
                 * socialLogin
                 *
                 * @param  mixed $request
                 * @return App/Models/User
                 */
                public function socialLogin($request)
                {
                    try {
                        $user = User::where([
                            ['email', '=', $request->email],
                            ['social_login_id', '=', $request->social_login_id],
                        ])->first();
                        if (!$user) {
                            return sendError('User does not exist', null);
                        }
                        $tokenResult = $user->createToken('Personal Access Token');
                        $user['access_token'] = $tokenResult->accessToken;
                        $user['token_type'] = 'Bearer';

                        return sendSuccess('Successfully login!', $user);
                    } catch (\Throwable $th) {
                        Log::info('Send Email error: ' . $th->getMessage());
                        return sendError('Some thing went wrong', null);
                    }
                }

                /**
                 * forgotPassword
                 *
                 * @param  mixed $request
                 * @return void
                 */
                public function sendOtpCode($request)
                {
                    try {
                        $user = User::orWhere('email', $request->email)->orWhere('phone', $request->phone)->first();
                        if ($user->is_blocked == Constants::BLOCKED_USER) {
                            Auth::logout();
                            return sendError('Your account has been blocked. Please contact with customer support.', null);
                        }
                        $otpCode = mt_rand(1000, 9999);
                        // $otpCode = 1111;
                        $user->remember_token = $otpCode;
                        $user->save();
                        if (isset($request->email) && $request->forget_type == Constants::RECOVER_PASSWORD_BY_EMAIL) {
                            Mail::to($request->email)->send(new SendOtp($otpCode));
                        } else {
                            sendOtpCodeBySMS($request, $otpCode);
                        }

                        return sendSuccess('OTP send successfully', $user);
                    } catch (\Exception $e) {
                        Log::info('Send Email error: ' . $e->getMessage());
                        return sendError('something went wrong. Please try again', $e->getMessage());
                    }
                }

                /**
                 * verifyOtpCode
                 *
                 * @param  mixed $request
                 * @return App/Models/User
                 */
                public function verifyOtpCode($request)
                {
                    $user = User::where('remember_token', $request->otp_code)->first();
                    if ($user->remember_token != $request->otp_code) {
                        return sendError('OTP code is incorrect!', null);
                    }
                    $tokenResult = $user->createToken('Personal Access Token');
                    $token = $tokenResult->token;
                    $token->expires_at = now()->addWeeks(1);
                    $user->update(['remember_token' => $token->id]);

                    return sendSuccess('Verify OTP code successfully!', $user);
                }

                /**
                 * recoverPassword
                 *
                 * @param  mixed $request
                 * @return void
                 */
                public function recoverPassword($request)
                {
                    try {
                        if (isset($request->email)) {
                            $user = User::where('email', $request->email)->first();
                        } else {
                            $user = User::where('phone', $request->phone)->first();
                        }

                        $user['password'] = bcrypt($request->password);
                        $user->save();

                        return sendSuccess('Password reset Successfully', $user);
                    } catch (\Exception $e) {
                        Log::info('recover password issue' . $e->getMessage());
                        return sendError('Some thing went wrong !', null);
                    }
                }

                /**
                 * termAndprivacy
                 *
                 * @return void
                 */
                public function termAndprivacy()
                {
                    $data = WebSitePolicies::get();

                    return sendSuccess('success', $data);
                }

                /**
                 * logout
                 *
                 * @return void
                 */
                public function logout()
                {
                    $user = Auth::user();
                    if ($user->token()->revoke()) {
                        $user['player_id'] = null;
                        $user->save();
                        return sendSuccess('Logout successfully!', null);
                    } else {
                        return sendError('Failed to logout', null);
                    }
                }

                /**
                 * changePassword
                 *
                 * @param  mixed $request
                 * @return void
                 */
                public function changePassword($request)
                {
                    try {
                        $user = Auth::user();
                        $input = $request->except(['token']);
                        $input['password'] = bcrypt($input['password']);
                        $user->update(['password' => $input['password']]);

                        return sendSuccess('Update password successfully', $user);
                    } catch (\Throwable $th) {
                        return sendError('Failed to update password', null);
                    }
                }
            </code>
    </pre>

    <pre>
        <code>
            ----------------------------Github & Gitlab--------------------------

            --> "generate ssh-key"

            ssh-keygen -t ed25519 -C "<comment>"

            --> "config username & email to git"

            git config --global user.name ""
            git config --global user.email ""

            --> "check the list of credentials given in the git"

            git config --global --list

            -->"First Create Branch of your own name"

            git checkout -b branch-name

            -->"To Push Commit"

            git add .
            git commit -am "comment"
            git push origin hassan

            -->"Stash all local changes"

            git stash
            git reset --hard --- discard everything permanently
            git stash list --- list your stashed changes.
            git stash show --- see what n is in the below commands.
            git stash apply --- apply the most recent stash.
            git stash apply stash@{n} --- apply an older stash.

            -->"Revert the stashed changes from local"

            git stash apply --index

        </code>

        <code>
            <span style="font-size: 22px;font-weight: bold">React JS</span>

                --> Topic Name --- "Exports & Imports (Module)"


                -------------------------- React Js --------------------------------

                --> ES6 Topics

                --> Topic Name --- "Let vs Constant"

                 let value = "qwerty"            //output  qwerty
                 let value = "qwerty1"          //output  qwerty1

                 const value = "qwerty"            //output  qwerty
                 const value = "qwerty1"          //output  qwerty     through error cause value can't be change


                --> Topic Name --- "Arrow Function"

                const functionName = (Param1, Param2, ......) => {    //function defination    }

                You  May user inline arrow function

                const functionName = (Param) => console.log(Param);


                --> Classes, Properties, & Methods --- ""

                class Human{
                  constructor(){
                    this.gender = "male";
                  }

                  printGender(){
                    console.log(this.gender);
                  }
                }


                class Person extends Human{
                  constructor(){
                    super();
                    this.name = "Max";
                    this.gender = "female";
                  }

                  printMyName(){
                    console.log(this.name);
                  }
                }

                const person = new Person();
                person.printMyName();
                person.printGender();

                Using Arrow Functions

                class Human{
                  gender = "male";
                  printGender = () => console.log(this.gender);
                }

                class Person extends Human{
                  name = "Max";
                  gender = "female";
                  printMyName = () => console.log(this.name);
                }

                const person = new Person();
                person.printMyName();
                person.printGender();


                --> spread & rest Operator --- ""

                //Spread operator
                const number = [1, 2, 3];
                const newNumber = [...number, 4];

                console.log(newNumber);  // Output [1, 2, 3, 4]

                //Rest Operator
                const filter = (...args) => {
                  return args.filter(el => el === 1);
                }

                console.log(filter(1, 2, 3));


                --> Destructuring --- ""

                const number = [1, 2, 3];
                [num1, num2] = number;
                console.log(num1,num2); //"1------2"

                [num1, , num2] = number;
                console.log(num1,num2); //"1------3"


                -->Array Refferences --- ""

                const number = [1, 2, 3];

                const doubleArray = number.map((num)=>{
                  return num * 2;
                });


                console.log(number);    //[1, 2, 3]
                console.log(doubleArray);   //[2, 4, 6]










                -------------- React Start -------------------

                How to install React

                npm install -g create-react-app      //it will install react globaly no need to run this commant every time.
                create-react-app projectName
                npm start   //start the

                If you find Plugin "react" was conflicted between "package.json » eslint-config-react-app this type of error use following coomand

                npm remove eslint-config-react-app
                npm add eslint-config-react-app@6
        </code>
    </pre>


</span>


</body>
</html>
