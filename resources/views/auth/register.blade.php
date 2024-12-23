<x-guest-layout>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ffd700, #ffac33);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .form-container {
            width: 100%;
            max-width: 900px;
            padding: 50px;
            background: #fff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            text-align: center;
        }

        .form-header {
            margin-bottom: 30px;
        }

        .form-header h1 {
            font-size: 28px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-label {
            display: block;
            font-size: 16px;
            font-weight: 600;
            color: #555;
            margin-bottom: 8px;
        }

        .form-input {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }

        .form-input:focus {
            border-colo: gold;
            box-shadow: gold;
            outline: none;
        }

        .form-error {
            margin-top: 5px;
            font-size: 14px;
            color: #e74c3c;
        }

        .form-actions {
            margin-top: 30px;
        }

        .link {
            display: inline-block;
            font-size: 14px;
            color: #555;
            text-decoration: none;
            margin-top: 20px;
        }

        .link:hover {
            text-decoration: underline;
        }
        .btn:hover {
    background: white;
    border: 2px solid orange; /* Added orange border */
    color: black;
    border-radius: 8px;
}
        .btn {
            display: inline-block;
            width: 100%;
            padding: 15px;
            background: gold;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        

    </style>

    <form method="POST" action="{{ route('register') }}" class="form-container">
        @csrf

        <div class="form-header">
            <h1>{{ __('Register') }}</h1>
        </div>

        <!-- Name -->
        <div class="form-group">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input 
                id="name" 
                type="text" 
                name="name" 
                value="{{ old('name') }}" 
                class="form-input" 
                required autofocus autocomplete="name" 
            />
            <x-input-error :messages="$errors->get('name')" class="form-error" />
        </div>

        <!-- Email Address -->
        <div class="form-group">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input 
                id="email" 
                type="email" 
                name="email" 
                value="{{ old('email') }}" 
                class="form-input" 
                required autocomplete="username"
            />
            <x-input-error :messages="$errors->get('email')" class="form-error" />
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input 
                id="password" 
                type="password" 
                name="password" 
                class="form-input" 
                required autocomplete="new-password"
            />
            <x-input-error :messages="$errors->get('password')" class="form-error" />
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
            <input 
                id="password_confirmation" 
                type="password" 
                name="password_confirmation" 
                class="form-input" 
                required autocomplete="new-password"
            />
            <x-input-error :messages="$errors->get('password_confirmation')" class="form-error" />
        </div>

        <div class="form-actions">
            <button type="submit" class="btn">
                {{ __('Register') }}
            </button>
            <a href="{{ route('login') }}" class="link">
                {{ __('Already registered?') }}
            </a>
        </div>
    </form>
</x-guest-layout>
