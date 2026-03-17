<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>SafeHaven Backend API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "https://app.clientsaccount.online";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.8.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.8.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-nin-initiate">
                                <a href="#endpoints-POSTapi-v1-nin-initiate">Step 1: Initiate NIN verification</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-nin-validate">
                                <a href="#endpoints-POSTapi-v1-nin-validate">Step 2: Validate NIN OTP</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-create-account">
                                <a href="#endpoints-POSTapi-v1-create-account">POST api/v1/create-account</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-transfers-banks">
                                <a href="#endpoints-GETapi-v1-transfers-banks">Get list of banks for transfers</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-transfers-name-enquiry">
                                <a href="#endpoints-POSTapi-v1-transfers-name-enquiry">POST api/v1/transfers/name-enquiry</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-transfers">
                                <a href="#endpoints-POSTapi-v1-transfers">POST api/v1/transfers</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: March 17, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>https://app.clientsaccount.online</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-v1-nin-initiate">Step 1: Initiate NIN verification</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-nin-initiate">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://app.clientsaccount.online/api/v1/nin/initiate" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nin\": \"81079874949\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://app.clientsaccount.online/api/v1/nin/initiate"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nin": "81079874949"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-nin-initiate">
</span>
<span id="execution-results-POSTapi-v1-nin-initiate" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-nin-initiate"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-nin-initiate"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-nin-initiate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-nin-initiate">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-nin-initiate" data-method="POST"
      data-path="api/v1/nin/initiate"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-nin-initiate', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-nin-initiate"
                    onclick="tryItOut('POSTapi-v1-nin-initiate');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-nin-initiate"
                    onclick="cancelTryOut('POSTapi-v1-nin-initiate');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-nin-initiate"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/nin/initiate</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-nin-initiate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-nin-initiate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nin</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nin"                data-endpoint="POSTapi-v1-nin-initiate"
               value="81079874949"
               data-component="body">
    <br>
<p>Must be 11 digits. Example: <code>81079874949</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-nin-validate">Step 2: Validate NIN OTP</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-nin-validate">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://app.clientsaccount.online/api/v1/nin/validate" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"identityId\": \"consequatur\",
    \"otp\": \"810798\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://app.clientsaccount.online/api/v1/nin/validate"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "identityId": "consequatur",
    "otp": "810798"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-nin-validate">
</span>
<span id="execution-results-POSTapi-v1-nin-validate" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-nin-validate"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-nin-validate"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-nin-validate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-nin-validate">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-nin-validate" data-method="POST"
      data-path="api/v1/nin/validate"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-nin-validate', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-nin-validate"
                    onclick="tryItOut('POSTapi-v1-nin-validate');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-nin-validate"
                    onclick="cancelTryOut('POSTapi-v1-nin-validate');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-nin-validate"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/nin/validate</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-nin-validate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-nin-validate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>identityId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="identityId"                data-endpoint="POSTapi-v1-nin-validate"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>otp</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="otp"                data-endpoint="POSTapi-v1-nin-validate"
               value="810798"
               data-component="body">
    <br>
<p>Must be 6 digits. Example: <code>810798</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-create-account">POST api/v1/create-account</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-create-account">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://app.clientsaccount.online/api/v1/create-account" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"qkunze@example.com\",
    \"phone\": \"81079874949\",
    \"identityNumber\": \"81079874949\",
    \"identityId\": \"consequatur\",
    \"otp\": \"810798\",
    \"companyRegistrationNumber\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://app.clientsaccount.online/api/v1/create-account"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "qkunze@example.com",
    "phone": "81079874949",
    "identityNumber": "81079874949",
    "identityId": "consequatur",
    "otp": "810798",
    "companyRegistrationNumber": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-create-account">
</span>
<span id="execution-results-POSTapi-v1-create-account" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-create-account"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-create-account"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-create-account" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-create-account">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-create-account" data-method="POST"
      data-path="api/v1/create-account"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-create-account', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-create-account"
                    onclick="tryItOut('POSTapi-v1-create-account');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-create-account"
                    onclick="cancelTryOut('POSTapi-v1-create-account');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-create-account"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/create-account</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-create-account"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-create-account"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-create-account"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-v1-create-account"
               value="81079874949"
               data-component="body">
    <br>
<p>Must be 11 digits. Example: <code>81079874949</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>identityNumber</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="identityNumber"                data-endpoint="POSTapi-v1-create-account"
               value="81079874949"
               data-component="body">
    <br>
<p>Must be 11 digits. Example: <code>81079874949</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>identityId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="identityId"                data-endpoint="POSTapi-v1-create-account"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>otp</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="otp"                data-endpoint="POSTapi-v1-create-account"
               value="810798"
               data-component="body">
    <br>
<p>Must be 6 digits. Example: <code>810798</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>companyRegistrationNumber</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="companyRegistrationNumber"                data-endpoint="POSTapi-v1-create-account"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-transfers-banks">Get list of banks for transfers</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-transfers-banks">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://app.clientsaccount.online/api/v1/transfers/banks" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://app.clientsaccount.online/api/v1/transfers/banks"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-transfers-banks">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;message&quot;: &quot;Banks fetched successfully&quot;,
    &quot;data&quot;: [
        {
            &quot;name&quot;: &quot;SOSA MFB&quot;,
            &quot;alias&quot;: [
                &quot;SOSA MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090836&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090836&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CEVIANT FINANCE LIMIED&quot;,
            &quot;alias&quot;: [
                &quot;CEVIANT FINANCE LIMIED&quot;
            ],
            &quot;routingKey&quot;: &quot;050043&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050043&quot;,
            &quot;categoryId&quot;: &quot;5&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MAYDEN MFB&quot;,
            &quot;alias&quot;: [
                &quot;MAYDEN MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090854&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090854&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MEMENTO MFB&quot;,
            &quot;alias&quot;: [
                &quot;MEMENTO MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090867&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090867&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FIRST LOWLAND MFB&quot;,
            &quot;alias&quot;: [
                &quot;FIRST LOWLAND MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090868&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090868&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;EQUATOR MFB&quot;,
            &quot;alias&quot;: [
                &quot;EQUATOR MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090872&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090872&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MIA MFB&quot;,
            &quot;alias&quot;: [
                &quot;MIA MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090859&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090859&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;RIMIN GADO MFB&quot;,
            &quot;alias&quot;: [
                &quot;RIMIN GADO MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090713&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090713&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SYCAMORE MFB&quot;,
            &quot;alias&quot;: [
                &quot;SYCAMORE MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090827&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090827&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;DABTIKIR MFB&quot;,
            &quot;alias&quot;: [
                &quot;DABTIKIR MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090802&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090802&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;HAMADA MFB&quot;,
            &quot;alias&quot;: [
                &quot;HAMADA MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090980&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090980&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BLOC MFB&quot;,
            &quot;alias&quot;: [
                &quot;BLOC MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090977&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090977&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;DEW MFB&quot;,
            &quot;alias&quot;: [
                &quot;DEW MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090978&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090978&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OBA MFB&quot;,
            &quot;alias&quot;: [
                &quot;OBA MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090981&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090981&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ZAIN MFB&quot;,
            &quot;alias&quot;: [
                &quot;ZAIN MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090976&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090976&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MOVASCO-OP MFB&quot;,
            &quot;alias&quot;: [
                &quot;MOVASCO-OP MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090979&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090979&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;AMAANAH FINANCE&quot;,
            &quot;alias&quot;: [
                &quot;AMAANAH FINANCE&quot;
            ],
            &quot;routingKey&quot;: &quot;050045&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050045&quot;,
            &quot;categoryId&quot;: &quot;5&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;STRAIGHT SAHARA MFB&quot;,
            &quot;alias&quot;: [
                &quot;STRAIGHT SAHARA MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090985&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090985&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GIANT STRIDE MFB&quot;,
            &quot;alias&quot;: [
                &quot;GIANT STRIDE MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090475&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090475&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NRI MFB&quot;,
            &quot;alias&quot;: [
                &quot;NRI MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090984&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090984&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;WE MFB&quot;,
            &quot;alias&quot;: [
                &quot;WE MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090989&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090989&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PLUG MFB&quot;,
            &quot;alias&quot;: [
                &quot;PLUG MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090858&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090858&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;DAYSPRING MFB&quot;,
            &quot;alias&quot;: [
                &quot;DAYSPRING MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090873&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090873&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ETHICA MFB&quot;,
            &quot;alias&quot;: [
                &quot;ETHICA MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090982&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090982&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PLATINUM MFB&quot;,
            &quot;alias&quot;: [
                &quot;PLATINUM MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090993&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090993&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UFORO MFB&quot;,
            &quot;alias&quot;: [
                &quot;UFORO MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090869&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090869&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NOLT FINANCE&quot;,
            &quot;alias&quot;: [
                &quot;NOLT FINANCE&quot;
            ],
            &quot;routingKey&quot;: &quot;050037&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050037&quot;,
            &quot;categoryId&quot;: &quot;5&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ARCPAY MFB&quot;,
            &quot;alias&quot;: [
                &quot;ARCPAY MFB&quot;,
                &quot;PROSPECT MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090689&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090689&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SOFRITRUST MFB&quot;,
            &quot;alias&quot;: [
                &quot;SOFRITRUST MFB&quot;,
                &quot;LINKS MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090435&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090435&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BOBBLE MFB&quot;,
            &quot;alias&quot;: [
                &quot;BOBBLE MFB&quot;,
                &quot;KOPO KOPE MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090617&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090617&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ETRANZACT&quot;,
            &quot;alias&quot;: [
                &quot;ETRANZACT&quot;,
                &quot;E-TRANZACT&quot;
            ],
            &quot;routingKey&quot;: &quot;100006&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100006&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GIANT STRIDE MFB&quot;,
            &quot;alias&quot;: [
                &quot;GIANT STRIDE MFB&quot;,
                &quot;GIANTSTRIDE MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090475&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090475&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NOMBANK MFB&quot;,
            &quot;alias&quot;: [
                &quot;NOMBANK MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090645&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090645&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SIGNATURE BANK&quot;,
            &quot;alias&quot;: [
                &quot;SIGNATURE BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;000034&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000034&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OPTIMUS BANK&quot;,
            &quot;alias&quot;: [
                &quot;OPTIMUS BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;000036&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000036&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;STERLING BANK&quot;,
            &quot;alias&quot;: [
                &quot;STERLING BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;000001&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000001&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;KEYSTONE BANK&quot;,
            &quot;alias&quot;: [
                &quot;KEYSTONE BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;000002&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000002&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FIRST CITY MONUMENT BANK&quot;,
            &quot;alias&quot;: [
                &quot;FCMB&quot;
            ],
            &quot;routingKey&quot;: &quot;000003&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000003&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UNITED BANK FOR AFRICA&quot;,
            &quot;alias&quot;: [
                &quot;UBA&quot;
            ],
            &quot;routingKey&quot;: &quot;000004&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000004&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;JAIZ BANK&quot;,
            &quot;alias&quot;: [
                &quot;JAIZ BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;000006&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000006&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FIDELITY BANK&quot;,
            &quot;alias&quot;: [
                &quot;FIDELITY BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;000007&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000007&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;POLARIS BANK&quot;,
            &quot;alias&quot;: [
                &quot;POLARIS BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;000008&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000008&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CITI BANK&quot;,
            &quot;alias&quot;: [
                &quot;CITI BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;000009&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000009&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ECOBANK&quot;,
            &quot;alias&quot;: [
                &quot;ECO BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;000010&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000010&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UNITY BANK&quot;,
            &quot;alias&quot;: [
                &quot;UNITY BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;000011&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000011&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;STANBIC IBTC BANK&quot;,
            &quot;alias&quot;: [
                &quot;STANBIC IBTC BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;000012&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000012&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GTBANK PLC&quot;,
            &quot;alias&quot;: [
                &quot;GUARANTY TRUST BANK PLC&quot;,
                &quot;GT BANK&quot;,
                &quot;GTB&quot;
            ],
            &quot;routingKey&quot;: &quot;000013&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000013&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ACCESS BANK&quot;,
            &quot;alias&quot;: [
                &quot;ACCESS BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;000014&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000014&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ZENITH BANK&quot;,
            &quot;alias&quot;: [
                &quot;ZENITH BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;000015&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000015&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FIRST BANK OF NIGERIA&quot;,
            &quot;alias&quot;: [
                &quot;FBN PLC&quot;
            ],
            &quot;routingKey&quot;: &quot;000016&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000016&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;WEMA BANK&quot;,
            &quot;alias&quot;: [
                &quot;WEMA BANK&quot;,
                &quot;ALAT&quot;
            ],
            &quot;routingKey&quot;: &quot;000017&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000017&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UNION BANK&quot;,
            &quot;alias&quot;: [
                &quot;UNION BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;000018&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000018&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ENTERPRISE BANK&quot;,
            &quot;alias&quot;: [
                &quot;ENTERPRISE BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;000019&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000019&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;STANDARD CHARTERED BANK&quot;,
            &quot;alias&quot;: [
                &quot;STANDARD CHARTERED BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;000021&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000021&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SUNTRUST BANK&quot;,
            &quot;alias&quot;: [
                &quot;SUNTRUST BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;000022&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000022&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PROVIDUS BANK&quot;,
            &quot;alias&quot;: [
                &quot;PROVIDUS BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;000023&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000023&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CORONATION MERCHANT BANK&quot;,
            &quot;alias&quot;: [
                &quot;CORONATION MERCHANT BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;060001&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;060001&quot;,
            &quot;categoryId&quot;: &quot;6&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NPF MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;070001&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070001&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FORTIS MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;070002&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070002&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PAGE MFBANK&quot;,
            &quot;routingKey&quot;: &quot;070008&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070008&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ASO SAVINGS&quot;,
            &quot;routingKey&quot;: &quot;090001&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090001&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;JUBILEE LIFE&quot;,
            &quot;routingKey&quot;: &quot;090003&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090003&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SAFETRUST&quot;,
            &quot;routingKey&quot;: &quot;090006&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090006&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FIRST TRUST MORTGAGE BANK PLC&quot;,
            &quot;routingKey&quot;: &quot;090107&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090107&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NEW PRUDENTIAL BANK&quot;,
            &quot;routingKey&quot;: &quot;090108&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090108&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PAGA&quot;,
            &quot;routingKey&quot;: &quot;100002&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100002&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PARKWAY-READYCASH&quot;,
            &quot;routingKey&quot;: &quot;100003&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100003&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CELLULANT&quot;,
            &quot;routingKey&quot;: &quot;100005&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100005&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ETRANZACT&quot;,
            &quot;routingKey&quot;: &quot;100006&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100006&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;STANBIC IBTC @EASE WALLET&quot;,
            &quot;routingKey&quot;: &quot;100007&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100007&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ECOBANK XPRESS ACCOUNT&quot;,
            &quot;routingKey&quot;: &quot;100008&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100008&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GT MOBILE&quot;,
            &quot;routingKey&quot;: &quot;100009&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100009&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;TEASY MOBILE&quot;,
            &quot;routingKey&quot;: &quot;100010&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100010&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;KUDA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090267&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090267&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;VT NETWORKS&quot;,
            &quot;routingKey&quot;: &quot;100012&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100012&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;KEGOW(CHAMSMOBILE)&quot;,
            &quot;routingKey&quot;: &quot;100036&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100036&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PAYSTACK-TITAN&quot;,
            &quot;routingKey&quot;: &quot;100039&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100039&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FORTIS MOBILE&quot;,
            &quot;routingKey&quot;: &quot;100016&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100016&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;HEDONMARK&quot;,
            &quot;routingKey&quot;: &quot;100017&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100017&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ZENITH MOBILE&quot;,
            &quot;routingKey&quot;: &quot;100018&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100018&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FIDELITY MOBILE&quot;,
            &quot;routingKey&quot;: &quot;100019&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100019&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MONEY BOX&quot;,
            &quot;routingKey&quot;: &quot;100020&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100020&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;EARTHOLEUM&quot;,
            &quot;routingKey&quot;: &quot;100021&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100021&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Gomoney&quot;,
            &quot;routingKey&quot;: &quot;100022&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100022&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;TAGPAY&quot;,
            &quot;routingKey&quot;: &quot;100023&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100023&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;IMPERIAL HOMES MORTGAGE BANK&quot;,
            &quot;routingKey&quot;: &quot;100024&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100024&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NIP VIRTUAL BANK&quot;,
            &quot;routingKey&quot;: &quot;999999&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;999999&quot;,
            &quot;categoryId&quot;: &quot;11&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FINATRUST MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090111&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090111&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SEED CAPITAL MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090112&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090112&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;IBANK MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090115&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090115&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;EMPIRE TRUST MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090114&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090114&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MICROVIS MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090113&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090113&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;AMML MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090116&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090116&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BOCTRUST MICROFINANCE BANK LIMITED&quot;,
            &quot;routingKey&quot;: &quot;090117&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090117&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;WETLAND  MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090120&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090120&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;IBILE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090118&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090118&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;REGENT MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090125&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090125&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NDIORAH MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090128&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090128&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BC KASH MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090127&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090127&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;HASAL MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090121&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090121&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FBNQUEST MERCHANT BANK&quot;,
            &quot;routingKey&quot;: &quot;060002&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;060002&quot;,
            &quot;categoryId&quot;: &quot;6&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;RICHWAY MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090132&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090132&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FIRST ALLY MICROFINANCE BANK&quot;,
            &quot;alias&quot;: [
                &quot;FIRST ALLY MICROFINANCE BANK&quot;,
                &quot;PERSONAL TRUST MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090135&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090135&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BAOBAB MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090136&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090136&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GOWANS MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090122&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090122&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;RAND MERCHANT BANK&quot;,
            &quot;routingKey&quot;: &quot;000024&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000024&quot;,
            &quot;categoryId&quot;: &quot;6&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;YES MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090142&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090142&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SAGAMU MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090140&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090140&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MONEY TRUST MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090129&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090129&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;LAGOS BUILDING AND INVESTMENT COMPANY&quot;,
            &quot;routingKey&quot;: &quot;070012&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070012&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GATEWAY MORTGAGE BANK&quot;,
            &quot;routingKey&quot;: &quot;070009&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070009&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ABBEY MORTGAGE BANK&quot;,
            &quot;routingKey&quot;: &quot;070010&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070010&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FIRST GENERATION MORTGAGE BANK&quot;,
            &quot;routingKey&quot;: &quot;070014&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070014&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PLATINUM MORTGAGE BANK&quot;,
            &quot;routingKey&quot;: &quot;070013&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070013&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;INFINITY TRUST MORTGAGE BANK&quot;,
            &quot;routingKey&quot;: &quot;070016&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070016&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OHAFIA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090119&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090119&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;XSLNCE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090124&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090124&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CONSUMER MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090130&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090130&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ALLWORKERS MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090131&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090131&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ACCION MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090134&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090134&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;VISA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090139&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090139&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CHIKUM MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090141&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090141&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;APEKS MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090143&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090143&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CIT MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090144&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090144&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FULLRANGE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090145&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090145&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FFS MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090153&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090153&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ADDOSSER MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090160&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090160&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FIDFUND MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090126&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090126&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;AG MORTGAGE BANK&quot;,
            &quot;routingKey&quot;: &quot;100028&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100028&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PECANTRUST MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090137&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090137&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BOWEN MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090148&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090148&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FUTO MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090158&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090158&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;REFUGE MORTGAGE BANK&quot;,
            &quot;routingKey&quot;: &quot;070011&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070011&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BRENT MORTGAGE BANK&quot;,
            &quot;routingKey&quot;: &quot;070015&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070015&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ROYAL EXCHANGE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090138&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090138&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;HACKMAN MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090147&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090147&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;TRIDENT MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090146&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090146&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;INFINITY MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090157&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090157&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CREDIT AFRIQUE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090159&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090159&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;E-BARCS MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090156&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090156&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;VFD MFB&quot;,
            &quot;routingKey&quot;: &quot;090110&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090110&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ECOMOBILE&quot;,
            &quot;routingKey&quot;: &quot;100030&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100030&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;INNOVECTIVES KESH&quot;,
            &quot;routingKey&quot;: &quot;100029&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100029&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;EKONDO MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090097&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090097&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;VIRTUE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090150&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090150&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;IRL MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090149&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090149&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FCMB MOBILE&quot;,
            &quot;routingKey&quot;: &quot;100031&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100031&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MUTUAL TRUST MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090151&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090151&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OKPOGA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090161&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090161&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NOVA MERCHANT BANK&quot;,
            &quot;routingKey&quot;: &quot;060003&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;060003&quot;,
            &quot;categoryId&quot;: &quot;6&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CEMCS MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090154&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090154&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;DAYLIGHT MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090167&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090167&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;HAGGAI MORTGAGE BANK LIMITED&quot;,
            &quot;routingKey&quot;: &quot;070017&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070017&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MAINSTREET MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090171&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090171&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GREENBANK MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090178&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090178&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FAST MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090179&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090179&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;LAPO MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090177&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090177&quot;,
            &quot;categoryId&quot;: &quot;0&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;HERITAGE BANK&quot;,
            &quot;routingKey&quot;: &quot;000020&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000020&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UNIVERSITY OF NIGERIA, NSUKKA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090251&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090251&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PENNYWISE MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090196&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090196&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ABU MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090197&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090197&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NIRSAL NATIONAL MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090194&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090194&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BOSAK MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090176&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090176&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ASTRAPOLARIS MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090172&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090172&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;QUICKFUND MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090261&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090261&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ALEKUN MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090259&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090259&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;RENMONEY MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090198&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090198&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;STELLAS MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090262&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090262&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NEW DAWN MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090205&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090205&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ALPHA KAPITAL MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090169&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090169&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;AUCHI MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090264&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090264&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;AB MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090270&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090270&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NIGERIAN NAVY MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090263&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090263&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;IMO STATE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090258&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090258&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;TRUSTFUND MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090276&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090276&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UCEE MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090706&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090706&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ISUA MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090701&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090701&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;TransPay MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090708&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090708&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CAPSTONE MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090445&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090445&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;DAL MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090596&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090596&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;DAILY TRUST MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090705&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090706&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UBA MONI&quot;,
            &quot;routingKey&quot;: &quot;000040&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000040&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ILE-OLUJI MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090710&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090710&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;TENN MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090716&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090716&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;IHALA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090725&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090725&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ZEDVANCE FINANCE LIMITED&quot;,
            &quot;routingKey&quot;: &quot;050019&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050019&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OMAK MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090700&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090700&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;AKALABO MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090698&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090698&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GROOMING MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090195&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090195&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;TOFA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090714&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090714&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;EMAAR MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090712&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090712&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;THE MILLENNIUM MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090711&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090711&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UNUBI MFB&quot;,
            &quot;routingKey&quot;: &quot;090719&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090719&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SINCERE MFB&quot;,
            &quot;routingKey&quot;: &quot;090339&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090339&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SABI MFB&quot;,
            &quot;routingKey&quot;: &quot;090727&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090727&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CRYSTAL FINANCE COMPANY LIMITED&quot;,
            &quot;routingKey&quot;: &quot;050029&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050029&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NOVUS MFB&quot;,
            &quot;routingKey&quot;: &quot;090734&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090734&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;LEVITE MFB&quot;,
            &quot;routingKey&quot;: &quot;090731&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090731&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NAF MFB&quot;,
            &quot;routingKey&quot;: &quot;090740&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090740&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;IBBU MFB&quot;,
            &quot;routingKey&quot;: &quot;090697&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090697&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;DW MFB&quot;,
            &quot;routingKey&quot;: &quot;090721&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090721&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OGBERURU MFB&quot;,
            &quot;routingKey&quot;: &quot;090738&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090738&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;WESTON-CHARIS MFB&quot;,
            &quot;routingKey&quot;: &quot;090741&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090741&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NOMASE MFB&quot;,
            &quot;routingKey&quot;: &quot;090736&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090736&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MAESTRO MFB&quot;,
            &quot;routingKey&quot;: &quot;090746&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090746&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;DIGITVANT MFB&quot;,
            &quot;routingKey&quot;: &quot;090745&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090745&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OGIGE MFB&quot;,
            &quot;routingKey&quot;: &quot;090739&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090739&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;APEX TRUST MFB&quot;,
            &quot;routingKey&quot;: &quot;090737&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090737&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ZEFA MFB&quot;,
            &quot;routingKey&quot;: &quot;090747&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090747&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ABOVE ONLY MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090260&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090260&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OLABISI ONABANJO UNIVERSITY MICROFINANCE &quot;,
            &quot;routingKey&quot;: &quot;090272&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090272&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ADEYEMI COLLEGE STAFF MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090268&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090268&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MEGAPRAISE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090280&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090280&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;TAJ BANK&quot;,
            &quot;routingKey&quot;: &quot;000026&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000026&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ARISE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090282&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090282&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PRESTIGE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090274&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090274&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GLORY MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090278&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090278&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BAINES CREDIT MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090188&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090188&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ACCESS(DIAMOND) BANK&quot;,
            &quot;routingKey&quot;: &quot;000005&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000005&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PILLAR MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090289&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090289&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SAFE HAVEN MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090286&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090286&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;AFEKHAFE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090292&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090292&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GLOBUS BANK&quot;,
            &quot;routingKey&quot;: &quot;000027&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000027&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FIRST OPTION MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090285&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090285&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;POLYUNWANA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090296&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090296&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OMIYE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090295&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090295&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ASSETMATRIX MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090287&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090287&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;TITAN TRUST BANK&quot;,
            &quot;routingKey&quot;: &quot;000025&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000025&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;LAVENDER MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090271&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090271&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FCT MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090290&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090290&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;IKIRE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090279&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090279&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PURPLEMONEY MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090303&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090303&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ACCESS YELLO &amp; BETA&quot;,
            &quot;routingKey&quot;: &quot;100052&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100052&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;TRUSTBANC J6 MICROFINANCE BANK LIMITED&quot;,
            &quot;routingKey&quot;: &quot;090123&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090123&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SULSPAP MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090305&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090305&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ESO-E MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090166&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090166&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;EMERALD MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090273&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090273&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ACCESS MONEY&quot;,
            &quot;routingKey&quot;: &quot;100013&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100013&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ALERT MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090297&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090297&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BRIGHTWAY MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090308&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090308&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PALMPAY&quot;,
            &quot;routingKey&quot;: &quot;100033&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100033&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SPARKLE&quot;,
            &quot;routingKey&quot;: &quot;090325&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090325&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BALOGUN GAMBARI MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090326&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090326&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PATRICKGOLD MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090317&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090317&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MAYFRESH MORTGAGE BANK&quot;,
            &quot;routingKey&quot;: &quot;070019&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070019&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;TRUST MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090327&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090327&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;AL-BARAKAH MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090133&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090133&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;EYOWO&quot;,
            &quot;routingKey&quot;: &quot;090328&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090328&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;EVANGEL MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090304&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090304&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;EVERGREEN MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090332&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090332&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OCHE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090333&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090333&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NUTURE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090364&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090364&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FIRSTMONIE WALLET&quot;,
            &quot;routingKey&quot;: &quot;100014&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100014&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NEPTUNE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090329&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090329&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;U &amp; C MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090315&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090315&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UNAAB MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090331&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090331&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;IKENNE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090324&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090324&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MAYFAIR MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090321&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090321&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;REPHIDIM MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090322&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090322&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;KONTAGORA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090299&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090299&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CASHCONNECT MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090360&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090360&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BIPC MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090336&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090336&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MOLUSI MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090362&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090362&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;LEGEND MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090372&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090372&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SEEDVEST MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090369&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090369&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;EAGLE FLIGHT MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090294&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090294&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;THINK FINANCE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090373&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090373&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FETS&quot;,
            &quot;routingKey&quot;: &quot;100001&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100001&quot;,
            &quot;categoryId&quot;: &quot;12&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;COASTLINE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090374&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090374&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MINT-FINEX MFB&quot;,
            &quot;routingKey&quot;: &quot;090281&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090281&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;HEADWAY MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090363&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090363&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ISALEOYO MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090377&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090377&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NEW GOLDEN PASTURES MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090378&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090378&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FSDH&quot;,
            &quot;routingKey&quot;: &quot;400001&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;400001&quot;,
            &quot;categoryId&quot;: &quot;4&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CORESTEP MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090365&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090365&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FEDPOLY NASARAWA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090298&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090298&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FIRMUS MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090366&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090366&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MANNY MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090383&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090383&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;DAVODANI  MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090391&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090391&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;EK-RELIABLE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090389&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090389&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GTI MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090385&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090385&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;YOBE MICROFINANCE  BANK&quot;,
            &quot;routingKey&quot;: &quot;090252&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090252&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;9 PAYMENT SOLUTIONS BANK&quot;,
            &quot;routingKey&quot;: &quot;120001&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;120001&quot;,
            &quot;categoryId&quot;: &quot;12&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OPAY&quot;,
            &quot;routingKey&quot;: &quot;100004&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100004&quot;,
            &quot;categoryId&quot;: &quot;12&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;RUBIES MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090175&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090175&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MOZFIN MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090392&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090392&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;INTERLAND MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090386&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090386&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FINCA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090400&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090400&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;KONGAPAY&quot;,
            &quot;routingKey&quot;: &quot;100025&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100025&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ILISAN MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090370&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090370&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NWANNEGADI MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090399&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090399&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GIREI MICROFINANACE BANK&quot;,
            &quot;routingKey&quot;: &quot;090186&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090186&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OSCOTECH MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090396&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090396&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BRIDGEWAY MICROFINANACE BANK&quot;,
            &quot;routingKey&quot;: &quot;090393&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090393&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;KREDI MONEY MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090380&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090380&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SHERPERD TRUST MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090401&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090401&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NOWNOW DIGITAL SYSTEMS LIMITED&quot;,
            &quot;routingKey&quot;: &quot;100032&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100032&quot;,
            &quot;categoryId&quot;: &quot;0&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;AMAC MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090394&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090394&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;LIVINGTRUST MORTGAGE BANK PLC&quot;,
            &quot;routingKey&quot;: &quot;070007&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070007&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;M36&quot;,
            &quot;routingKey&quot;: &quot;100035&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100035&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NNEW WOMEN MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090283&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090283&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GMB MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090408&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090408&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;TRUSTBOND MORTGAGE BANK&quot;,
            &quot;routingKey&quot;: &quot;090005&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090005&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NAGARTA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090152&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090152&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ADVANS LA FAYETTE  MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090155&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090155&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;STANFORD MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090162&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090162&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FIRST ROYAL MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090164&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090164&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PETRA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090165&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090165&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GASHUA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090168&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090168&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;RELIANCE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090173&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090173&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MALACHY MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090174&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090174&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;AMJU UNIQUE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090180&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090180&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ESAN MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090189&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090189&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MUTUAL BENEFITS MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090190&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090190&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;KCMB MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090191&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090191&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MIDLAND MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090192&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090192&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UNICAL MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090193&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090193&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;LOVONUS MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090265&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090265&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UNIBEN MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090266&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090266&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GREENVILLE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090269&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090269&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;AL-HAYAT MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090277&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090277&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BRETHREN MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090293&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090293&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;EDFIN MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090310&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090310&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FUD MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090318&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090318&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;KADPOLY MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090320&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090320&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MAINLAND MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090323&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090323&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;APPLE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090376&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090376&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BORGU  MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090395&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090395&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FEDERAL POLYTECHNIC NEKEDE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090398&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090398&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;DOJE MICROFINANCE BANK&quot;,
            &quot;alias&quot;: [
                &quot;OLOWOLAGBA MICROFINANCE BANK&quot;,
                &quot;OLOWOLAGBA MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090404&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090404&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BUSINESS SUPPORT MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090406&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090406&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MKUDI&quot;,
            &quot;routingKey&quot;: &quot;100011&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100011&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ACCELEREX NETWORK LIMITED&quot;,
            &quot;routingKey&quot;: &quot;090202&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090202&quot;,
            &quot;categoryId&quot;: &quot;11&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;HOPEPSB&quot;,
            &quot;routingKey&quot;: &quot;120002&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;120002&quot;,
            &quot;categoryId&quot;: &quot;11&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BAYERO UNIVERSITY MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090316&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090316&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OLD SHOREHAM MICROFINANCE BANK&quot;,
            &quot;alias&quot;: [
                &quot;OLD SHOREHAM MFB&quot;,
                &quot;MARITIME MICROFINANCE BANK&quot;,
                &quot;MARITIME MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090410&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090410&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;AGOSASA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090371&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090371&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ZENITH EASY WALLET&quot;,
            &quot;routingKey&quot;: &quot;100034&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100034&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;COOP MORTGAGE BANK&quot;,
            &quot;routingKey&quot;: &quot;070021&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070021&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CARBON&quot;,
            &quot;routingKey&quot;: &quot;100026&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100026&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;LINKS MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090435&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090435&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;RIGO MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090433&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090433&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PEACE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090402&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090402&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SPECTRUM MICROFINANCE BANK &quot;,
            &quot;routingKey&quot;: &quot;090436&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090436&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GREENWICH MERCHANT BANK&quot;,
            &quot;routingKey&quot;: &quot;060004&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;060004&quot;,
            &quot;categoryId&quot;: &quot;6&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;LOTUS BANK&quot;,
            &quot;routingKey&quot;: &quot;000029&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000029&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;TANGERINE MONEY&quot;,
            &quot;routingKey&quot;: &quot;090426&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090426&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PARALLEX BANK&quot;,
            &quot;routingKey&quot;: &quot;000030&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000030&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Moyofade MF Bank&quot;,
            &quot;routingKey&quot;: &quot;090448&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090448&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;REX  Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090449&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090449&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Kwasu MF Bank&quot;,
            &quot;routingKey&quot;: &quot;090450&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090450&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ATBU  Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090451&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090451&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UNILAG  Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090452&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090452&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Uzondu MF Bank&quot;,
            &quot;routingKey&quot;: &quot;090453&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090453&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Borstal Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090454&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090454&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Oluchukwu Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090471&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090471&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Caretaker Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090472&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090472&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Assets Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090473&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090473&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FOCUS MFB&quot;,
            &quot;routingKey&quot;: &quot;090709&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090709&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MADOBI MFB&quot;,
            &quot;routingKey&quot;: &quot;090605&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090605&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UCEE MFB&quot;,
            &quot;routingKey&quot;: &quot;090706&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090706&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ISUA MFB&quot;,
            &quot;routingKey&quot;: &quot;090701&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090701&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Verdant Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090474&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090474&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Giant Stride Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090475&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090475&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Anchorage Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090476&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090476&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Light Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090477&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090477&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Avuenegbe Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090478&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090478&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;First Heritage Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090479&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090479&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;KOLOMONI MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090480&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090480&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Prisco  Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090481&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090481&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Ada Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090483&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090483&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Garki Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090484&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090484&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SAFEGATE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090485&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090485&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Fortress Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090486&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090486&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Kingdom College  Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090487&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090487&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Ibu-Aje Microfinance&quot;,
            &quot;routingKey&quot;: &quot;090488&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090488&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Alvana Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090489&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090489&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MKOBO MICROFINANCE BANK LTD&quot;,
            &quot;routingKey&quot;: &quot;090455&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090455&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Ospoly Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090456&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090456&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Nice Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090459&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090459&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Oluyole Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090460&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090460&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Uniibadan Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090461&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090461&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Monarch Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090462&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090462&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Rehoboth Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090463&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090463&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UNIMAID MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090464&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090464&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Maintrust Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090465&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090465&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;YCT MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090466&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090466&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Good Neighbours Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090467&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090467&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Olofin Owena Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090468&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090468&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Aniocha Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090469&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090469&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SUPPORT MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090446&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090446&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CBN&quot;,
            &quot;routingKey&quot;: &quot;000028&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000028&quot;,
            &quot;categoryId&quot;: &quot;11&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CLEARPAY MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090482&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090482&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;DOT MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090470&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090470&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ZIKORA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090504&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090504&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SOLID ALLIANZE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090506&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090506&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PREMIUM TRUST  BANK&quot;,
            &quot;routingKey&quot;: &quot;000031&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000031&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SMARTCASH PAYMENT SERVICE BANK&quot;,
            &quot;routingKey&quot;: &quot;120004&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;120004&quot;,
            &quot;categoryId&quot;: &quot;0&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MONIEPOINT MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090405&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090405&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;HOMEBASE MORTGAGE BANK&quot;,
            &quot;routingKey&quot;: &quot;070024&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070024&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MOMO PAYMENT SERVICE BANK &quot;,
            &quot;routingKey&quot;: &quot;120003&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;120003&quot;,
            &quot;categoryId&quot;: &quot;12&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Chukwunenye  Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090490&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090490&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Nsuk  Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090491&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090491&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Oraukwu  Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090492&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090492&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Iperu Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090493&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090493&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Boji Boji Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090494&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090494&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Prospa Capital MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090495&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090495&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Radalpha Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090496&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090496&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Palmcoast Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090497&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090497&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Catland Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090498&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090498&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Pristine Divitis Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090499&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090499&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FEWCHORE FINANCE COMPANY LIMITED&quot;,
            &quot;routingKey&quot;: &quot;050002&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050002&quot;,
            &quot;categoryId&quot;: &quot;5&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;COVENANT MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;070006&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070006&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Gwong Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090500&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090500&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Boromu Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090501&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090501&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Shalom Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090502&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090502&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Projects Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090503&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090503&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Nigeria Prisons Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090505&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090505&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Fims Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090507&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090507&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Borno Renaissance Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090508&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090508&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Capitalmetriq Swift Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090509&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090509&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Umunnachi Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090510&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090510&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Cloverleaf  Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090511&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090511&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Bubayero Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090512&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090512&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Seap Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090513&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090513&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Umuchinemere Procredit Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090514&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090514&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Rima Growth Pathway Microfinance Bank &quot;,
            &quot;routingKey&quot;: &quot;090515&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090515&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Numo Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090516&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090516&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Uhuru Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090517&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090517&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Afemai Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090518&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090518&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Ibom Fadama Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090519&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090519&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;IC Globalmicrofinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090520&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090520&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Foresight Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090521&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090521&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Focus MFB&quot;,
            &quot;routingKey&quot;: &quot;090709&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090709&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Chase Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090523&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090523&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Solidrock Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090524&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090524&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Triple A Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090525&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090525&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Crescent Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090526&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090526&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Ojokoro Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090527&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090527&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Mgbidi Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090528&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090528&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Bankly Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090529&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090529&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Confidence Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090530&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090530&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Aku Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090531&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090531&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Ibolo Micorfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090532&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090532&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PolyIbadan Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090534&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090534&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Nkpolu-Ust Microfinance&quot;,
            &quot;routingKey&quot;: &quot;090535&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090535&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Ikoyi-Osun Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090536&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090536&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Lobrem Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090537&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090537&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Blue Investments Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090538&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090538&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Enrich Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090539&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090539&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Aztec Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090540&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090540&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Excellent Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090541&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090541&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Otuo Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090542&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090542&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Iwoama Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090543&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090543&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Aspire Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090544&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090544&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Abulesoro Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090545&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090545&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Ijebu-Ife Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090546&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090546&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Rockshield Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090547&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090547&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Ally Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090548&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090548&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Kc Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090549&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090549&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Green Energy Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090550&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090550&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Fairmoney Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090551&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090551&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Ekimogun Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090552&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090552&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Consistent Trust Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090553&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090553&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Kayvee Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090554&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090554&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Bishopgate Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090555&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090555&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Egwafin Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090556&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090556&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Lifegate Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090557&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090557&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Shongom Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090558&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090558&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Shield Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090559&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090559&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;TANADI MFB (CRUST)&quot;,
            &quot;routingKey&quot;: &quot;090560&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090560&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Akuchukwu Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090561&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090561&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Cedar Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090562&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090562&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Balera Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090563&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090563&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Supreme Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090564&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090564&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Oke-Aro Oredegbe Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090565&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090565&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Okuku Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090566&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090566&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Orokam Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090567&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090567&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Broadview Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090568&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090568&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Qube Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090569&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090569&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Iyamoye Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090570&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090570&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Ilaro Poly Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090571&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090571&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Ewt Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090572&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090572&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Snow Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090573&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090573&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GOLDMAN MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090574&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090574&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Firstmidas Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090575&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090575&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Octopus Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090576&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090576&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Iwade Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090578&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090578&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Gbede Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090579&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090579&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Otech Microfinance Bank Ltd&quot;,
            &quot;routingKey&quot;: &quot;090580&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090580&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BANC CORP MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090581&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090581&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;STATESIDE MFB&quot;,
            &quot;routingKey&quot;: &quot;090583&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090583&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Island MFB&quot;,
            &quot;routingKey&quot;: &quot;090584&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090584&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GOMBE MICROFINANCE BANK LTD&quot;,
            &quot;routingKey&quot;: &quot;090586&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090586&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Microbiz Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090587&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090587&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Orisun MFB&quot;,
            &quot;routingKey&quot;: &quot;090588&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090588&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Mercury MFB&quot;,
            &quot;routingKey&quot;: &quot;090589&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090589&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;WAYA MICROFINANCE BANK LTD&quot;,
            &quot;routingKey&quot;: &quot;090590&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090590&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Gabsyn Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090591&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090591&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;KANO POLY MFB&quot;,
            &quot;routingKey&quot;: &quot;090592&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090592&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;TASUED MICROFINANCE BANK LTD&quot;,
            &quot;routingKey&quot;: &quot;090593&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090593&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;IBA MFB &quot;,
            &quot;routingKey&quot;: &quot;090598&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090598&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Greenacres MFB&quot;,
            &quot;routingKey&quot;: &quot;090599&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090599&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;AVE MARIA MICROFINANCE BANK LTD&quot;,
            &quot;routingKey&quot;: &quot;090600&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090600&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;KENECHUKWU MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090602&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090602&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Macrod MFB&quot;,
            &quot;routingKey&quot;: &quot;090603&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090603&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;KKU Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090606&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090606&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Akpo Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090608&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090608&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BUYPOWER MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090682&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090682&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Ummah Microfinance Bank &quot;,
            &quot;routingKey&quot;: &quot;090609&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090609&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;AMOYE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090610&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090610&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Creditville Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090611&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090611&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Medef Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090612&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090612&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Build Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090613&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090613&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;AELLA MFB&quot;,
            &quot;routingKey&quot;: &quot;090614&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090614&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Beststar Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090615&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090615&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;RAYYAN Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090616&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090616&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Iyin Ekiti MFB&quot;,
            &quot;routingKey&quot;: &quot;090620&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090620&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GIDAUNIYAR ALHERI MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090621&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090621&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Mab Allianz MFB&quot;,
            &quot;routingKey&quot;: &quot;090623&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090623&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CASHRITE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090649&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090649&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PYRAMID MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090657&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090657&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MICHAEL OKPARA UNIAGRIC MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090659&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090659&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Nomba Financial Services Limited&quot;,
            &quot;routingKey&quot;: &quot;110028&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;110028&quot;,
            &quot;categoryId&quot;: &quot;11&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ABUCOOP  MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090424&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090424&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;IBOM MORTGAGE BANK&quot;,
            &quot;routingKey&quot;: &quot;070025&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070025&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ALTERNATIVE BANK LIMITED&quot;,
            &quot;routingKey&quot;: &quot;000037&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000037&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ARAMOKO MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090307&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090307&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BALOGUN FULANI  MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090181&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090181&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BANEX MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090425&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090425&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BENYSTA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090413&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090413&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BLUEWHALES  MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090431&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090431&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BOI MF BANK&quot;,
            &quot;routingKey&quot;: &quot;090444&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090444&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BONGHE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090319&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090319&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Branch International Finance Company Limited&quot;,
            &quot;routingKey&quot;: &quot;050006&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050006&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CALABAR MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090415&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090415&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CAPSTONE MF BANK&quot;,
            &quot;routingKey&quot;: &quot;090445&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090445&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CBN_TSA&quot;,
            &quot;routingKey&quot;: &quot;999001&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;999001&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CHANELLE BANK&quot;,
            &quot;routingKey&quot;: &quot;090397&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090397&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CHERISH MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090440&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090440&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CHIBUEZE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090416&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090416&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CITIZEN TRUST MICROFINANCE BANK LTD&quot;,
            &quot;routingKey&quot;: &quot;090343&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090343&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;COALCAMP MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090254&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090254&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;COUNTY FINANCE LTD&quot;,
            &quot;routingKey&quot;: &quot;050001&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050001&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CROSSRIVER  MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090429&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090429&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CRUTECH  MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090414&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090414&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;DELTA TRUST MORTGAGE BANK&quot;,
            &quot;routingKey&quot;: &quot;070023&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070023&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;DIGNITY FINANCE&quot;,
            &quot;routingKey&quot;: &quot;050013&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050013&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;EBSU MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090427&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090427&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ENAIRA&quot;,
            &quot;routingKey&quot;: &quot;000033&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000033&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ENCO FINANCE&quot;,
            &quot;routingKey&quot;: &quot;050012&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050012&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FAME MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090330&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090330&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FAST CREDIT&quot;,
            &quot;routingKey&quot;: &quot;050009&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050009&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FCMB MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090409&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090409&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FHA MORTGAGE BANK LTD&quot;,
            &quot;routingKey&quot;: &quot;070026&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070026&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FIRST MULTIPLE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090163&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090163&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FUNDQUEST FINANCIAL SERVICES LTD&quot;,
            &quot;routingKey&quot;: &quot;050010&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050010&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;FUTMINNA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090438&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090438&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GIGINYA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090411&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090411&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GIWA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090441&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090441&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GRANT MF BANK&quot;,
            &quot;routingKey&quot;: &quot;090335&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090335&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;HALACREDIT MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090291&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090291&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;HIGHLAND MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090418&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090418&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;AAA FINANCE&quot;,
            &quot;routingKey&quot;: &quot;050005&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050005&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;IBETO  MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090439&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090439&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ILLORIN MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090350&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090350&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ILORA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090430&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090430&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;IMOWO MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090417&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090417&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;INSIGHT MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090434&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090434&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ISHIE  MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090428&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090428&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ISUOFIA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090353&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090353&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ITEX INTEGRATED SERVICES LIMITED&quot;,
            &quot;routingKey&quot;: &quot;090211&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090211&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;IYERU OKIN MICROFINANCE BANK LTD&quot;,
            &quot;routingKey&quot;: &quot;090337&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090337&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;IZON MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090421&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090421&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;JESSEFIELD MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090352&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090352&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;LANDGOLD  MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090422&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090422&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;LETSHEGO MFB&quot;,
            &quot;routingKey&quot;: &quot;090420&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090420&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MACROD MFB&quot;,
            &quot;routingKey&quot;: &quot;090603 &quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090603 &quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MAUTECH MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090423&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090423&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MEMPHIS MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090432&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090432&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BANKIT MFB&quot;,
            &quot;routingKey&quot;: &quot;090275&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090275&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NASARAWA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090349&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090349&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NEWEDGE FINANCE LTD&quot;,
            &quot;routingKey&quot;: &quot;050004&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050004&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NUGGETS MFB&quot;,
            &quot;routingKey&quot;: &quot;090676&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090676&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OAKLAND MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090437&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090437&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OAU MICROFINANCE BANK LTD&quot;,
            &quot;routingKey&quot;: &quot;090345&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090345&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PARKWAY MF BANK&quot;,
            &quot;routingKey&quot;: &quot;090390&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090390&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PARRALEX MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090004&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090004&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PENIEL MICORFINANCE BANK LTD&quot;,
            &quot;routingKey&quot;: &quot;090379&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090379&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PREEMINENT MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090412&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090412&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;RAHAMA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090170&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090170&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;RIMA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090443&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090443&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SAGEGREY FINANCE LIMITED&quot;,
            &quot;routingKey&quot;: &quot;050003&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050003&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SIMPLE FINANCE LIMITED&quot;,
            &quot;routingKey&quot;: &quot;050008&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050008&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;STANDARD MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090182&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090182&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;KEGOW&quot;,
            &quot;routingKey&quot;: &quot;100015&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100015&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;XPRESS WALLET&quot;,
            &quot;routingKey&quot;: &quot;100040&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100040&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;STB MORTGAGE BANK&quot;,
            &quot;routingKey&quot;: &quot;070022&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070022&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;STOCKCORP  MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090340&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090340&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SUNBEAM MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090302&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090302&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;TAJWALLET&quot;,
            &quot;routingKey&quot;: &quot;080002&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;080002&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;TEKLA FINANCE LTD&quot;,
            &quot;routingKey&quot;: &quot;050007&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050007&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;TRINITY FINANCIAL SERVICES LIMITED&quot;,
            &quot;routingKey&quot;: &quot;050014&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050014&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UDA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090403&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090403&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UNILORIN MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090341&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090341&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UNIUYO MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090338&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090338&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;VALE FINANCE LIMITED&quot;,
            &quot;routingKey&quot;: &quot;050020&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050020&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;WINVIEW BANK&quot;,
            &quot;routingKey&quot;: &quot;090419&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090419&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;WRA MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090631&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090631&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BELLABANK MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090672&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090672&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;XPRESS PAYMENTS&quot;,
            &quot;routingKey&quot;: &quot;090201&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090201&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MONEY MASTER PSB&quot;,
            &quot;routingKey&quot;: &quot;120005&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;120005&quot;,
            &quot;categoryId&quot;: &quot;12&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SPRINGFIELD MICROFINANCE BANK&quot;,
            &quot;alias&quot;: [
                &quot;SPRINGFIELD MICROFINANCE BANK&quot;,
                &quot;SPRINGFIELD MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090806&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090806&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;WALLET MFB&quot;,
            &quot;alias&quot;: [
                &quot;WALLET MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090805&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090805&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UMUNRI MFB&quot;,
            &quot;alias&quot;: [
                &quot;UMUNRI MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090808&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090808&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GADOL FINANCE&quot;,
            &quot;alias&quot;: [
                &quot;GADOL FINANCE&quot;
            ],
            &quot;routingKey&quot;: &quot;050303&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050303&quot;,
            &quot;categoryId&quot;: &quot;5&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;KAIZEN MICROFINANCE BANK&quot;,
            &quot;alias&quot;: [
                &quot;KAIZEN MICROFINANCE BANK&quot;,
                &quot;KAIZEN MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090800&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090800&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OURS MFB&quot;,
            &quot;alias&quot;: [
                &quot;OURS MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090346&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090346&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BOLD MFB&quot;,
            &quot;alias&quot;: [
                &quot;BOLD MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090753&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090753&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;EVIB FINANCE&quot;,
            &quot;alias&quot;: [
                &quot;EVIB FINANCE&quot;
            ],
            &quot;routingKey&quot;: &quot;050034&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050034&quot;,
            &quot;categoryId&quot;: &quot;5&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BARNAWA MFB&quot;,
            &quot;alias&quot;: [
                &quot;BARNAWA MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090783&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090783&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;IKERE MFB&quot;,
            &quot;alias&quot;: [
                &quot;IKERE MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090779&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090779&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ULTIMATE MICROFINANCE BANK&quot;,
            &quot;alias&quot;: [
                &quot;ULTIMATE MICROFINANCE BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;090776&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090776&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UGA MICROFINANCE BANK&quot;,
            &quot;alias&quot;: [
                &quot;UGA MICROFINANCE BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;090978&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090978&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NEXTON MICROFINANCE BANK&quot;,
            &quot;alias&quot;: [
                &quot;NEXTON MICROFINANCE BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;090818&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090818&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SPRING SKY FINANCE&quot;,
            &quot;alias&quot;: [
                &quot;SPRING SKY FINANCE&quot;
            ],
            &quot;routingKey&quot;: &quot;050306&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050306&quot;,
            &quot;categoryId&quot;: &quot;5&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OBOLLO MFB&quot;,
            &quot;alias&quot;: [
                &quot;OBOLLO MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090810&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090810&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;VISTA MICROFINANCE BANK&quot;,
            &quot;alias&quot;: [
                &quot;VISTA MICROFINANCE BANK&quot;
            ],
            &quot;routingKey&quot;: &quot;090787&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090787&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PODER FINANCE&quot;,
            &quot;routingKey&quot;: &quot;050021&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050021&quot;,
            &quot;categoryId&quot;: &quot;5&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Moremonee MFB&quot;,
            &quot;alias&quot;: [
                &quot;M&amp;M MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090685&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090685&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BLOOMS MFB&quot;,
            &quot;alias&quot;: [
                &quot;BLOOM MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090743&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090743&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MINT MFB&quot;,
            &quot;alias&quot;: [
                &quot;MINT MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090763&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090763&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MODEL MICROFINANCE BANK&quot;,
            &quot;alias&quot;: [
                &quot;MODEL MFB&quot;
            ],
            &quot;routingKey&quot;: &quot;090775&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090775&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;NORTHQUEST FINANCE&quot;,
            &quot;routingKey&quot;: &quot;050030&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050030&quot;,
            &quot;categoryId&quot;: &quot;5&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;POCKETAPP&quot;,
            &quot;routingKey&quot;: &quot;100042&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;100042&quot;,
            &quot;categoryId&quot;: &quot;10&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Igbo-Ukwu MFB&quot;,
            &quot;routingKey&quot;: &quot;090803&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090803&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;LIGHTWAY MFB&quot;,
            &quot;routingKey&quot;: &quot;090807&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090807&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UNIABUJA MFB&quot;,
            &quot;routingKey&quot;: &quot;090778&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090778&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BANKEASY MFB&quot;,
            &quot;routingKey&quot;: &quot;090789&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090789&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ULTRAVIOLET MFB&quot;,
            &quot;routingKey&quot;: &quot;090781&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090781&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;LiquidCrest MFB&quot;,
            &quot;routingKey&quot;: &quot;090780&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090780&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PRODIGY MFB&quot;,
            &quot;routingKey&quot;: &quot;090784&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090784&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OKO MFB&quot;,
            &quot;routingKey&quot;: &quot;090348&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090348&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OBELEDU MFB&quot;,
            &quot;routingKey&quot;: &quot;090755&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090755&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CENTRUM FINANCE&quot;,
            &quot;routingKey&quot;: &quot;050032&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050032&quot;,
            &quot;categoryId&quot;: &quot;5&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UBJ MFB&quot;,
            &quot;routingKey&quot;: &quot;090762&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090762&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OKWO-OHA MFB&quot;,
            &quot;routingKey&quot;: &quot;090752&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090752&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OVOUMA MFB&quot;,
            &quot;routingKey&quot;: &quot;090765&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090765&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MAAL MFB&quot;,
            &quot;routingKey&quot;: &quot;090764&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090764&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SWIFT TRUST MFB&quot;,
            &quot;routingKey&quot;: &quot;090757&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090757&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;HILLPOST MFB&quot;,
            &quot;routingKey&quot;: &quot;090761&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090761&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ADVANCLY MFB&quot;,
            &quot;routingKey&quot;: &quot;090759&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090759&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Uga MFB&quot;,
            &quot;routingKey&quot;: &quot;090782&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090782&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;UNION MFB&quot;,
            &quot;routingKey&quot;: &quot;090783&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090783&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Toprate MFB&quot;,
            &quot;routingKey&quot;: &quot;090801&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090801&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;DSC Microfinance Bank&quot;,
            &quot;routingKey&quot;: &quot;090821&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090821&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ARM MFB&quot;,
            &quot;routingKey&quot;: &quot;090816&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090816&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Sciart Finance&quot;,
            &quot;routingKey&quot;: &quot;050024&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050024&quot;,
            &quot;categoryId&quot;: &quot;5&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Auchi Poly MFB&quot;,
            &quot;routingKey&quot;: &quot;090817&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090817&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Umuoji MFB&quot;,
            &quot;routingKey&quot;: &quot;090814&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090814&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Noun MFB&quot;,
            &quot;routingKey&quot;: &quot;090822&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090822&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;TELLERONE FI MFB&quot;,
            &quot;routingKey&quot;: &quot;090788&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090788&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;First Marina Trust Finance&quot;,
            &quot;routingKey&quot;: &quot;050022&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050022&quot;,
            &quot;categoryId&quot;: &quot;5&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Whitecrust Finance&quot;,
            &quot;routingKey&quot;: &quot;050035&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050035&quot;,
            &quot;categoryId&quot;: &quot;5&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Bowman MFB&quot;,
            &quot;routingKey&quot;: &quot;090804&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090804&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Ukpor MFB&quot;,
            &quot;routingKey&quot;: &quot;090820&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090820&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Dillon MFB&quot;,
            &quot;routingKey&quot;: &quot;090828&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090828&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Charis MFB&quot;,
            &quot;routingKey&quot;: &quot;090815&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090815&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Tatum Bank&quot;,
            &quot;routingKey&quot;: &quot;000042&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;000042&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Moneytronics MFB&quot;,
            &quot;routingKey&quot;: &quot;090692&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090692&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Eastman MFB&quot;,
            &quot;routingKey&quot;: &quot;090707&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090707&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Mega MFB&quot;,
            &quot;routingKey&quot;: &quot;090824&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090824&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Victory MFB&quot;,
            &quot;routingKey&quot;: &quot;090813&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090813&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Adamawa Mortgage Bank&quot;,
            &quot;routingKey&quot;: &quot;070030&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070030&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Boost MFB&quot;,
            &quot;routingKey&quot;: &quot;090819&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090819&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Summit Bank&quot;,
            &quot;routingKey&quot;: &quot;080030&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;080030&quot;,
            &quot;categoryId&quot;: &quot;2&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Bank of Agriculture&quot;,
            &quot;routingKey&quot;: &quot;090367&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090367&quot;,
            &quot;categoryId&quot;: &quot;3&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;5TT MFB&quot;,
            &quot;routingKey&quot;: &quot;090832&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090832&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Flexi MFB&quot;,
            &quot;routingKey&quot;: &quot;090835&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090835&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;Bokkos MFB&quot;,
            &quot;routingKey&quot;: &quot;090703&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090703&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;9jaPay MFB&quot;,
            &quot;routingKey&quot;: &quot;090629&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090629&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;IKORODU DIVISION MFB&quot;,
            &quot;routingKey&quot;: &quot;090844&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090844&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ASCENSIA FINANCE COMPANY LIMITED&quot;,
            &quot;routingKey&quot;: &quot;050040&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050040&quot;,
            &quot;categoryId&quot;: &quot;5&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;COOL MFB&quot;,
            &quot;routingKey&quot;: &quot;090842&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090842&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;GRIFFIN FINANCE LIMITED&quot;,
            &quot;routingKey&quot;: &quot;050041&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;050041&quot;,
            &quot;categoryId&quot;: &quot;5&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;KEBBI STATE HOME SAVINGS AND LOANS LIMITED&quot;,
            &quot;routingKey&quot;: &quot;070031&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070031&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SHANONO MFB&quot;,
            &quot;routingKey&quot;: &quot;090748&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090748&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;QUICK MFB&quot;,
            &quot;routingKey&quot;: &quot;090850&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090850&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BKD NEW MFB&quot;,
            &quot;routingKey&quot;: &quot;090722&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090722&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;STABLE MFB&quot;,
            &quot;routingKey&quot;: &quot;090833&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090833&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ISI-UZO MFB&quot;,
            &quot;routingKey&quot;: &quot;090849&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090849&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;INEBA GOGO MFB&quot;,
            &quot;routingKey&quot;: &quot;090838&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090838&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PAYREP MFB&quot;,
            &quot;routingKey&quot;: &quot;090823&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090823&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;HAYAT TRUST MFB&quot;,
            &quot;routingKey&quot;: &quot;090777&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090777&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PATHFINDER MFB&quot;,
            &quot;routingKey&quot;: &quot;090680&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090680&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;MAHFUZ MFB&quot;,
            &quot;routingKey&quot;: &quot;090825&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090825&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;KKU MFB&quot;,
            &quot;routingKey&quot;: &quot;090606&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090606&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;CEDRUS MFB&quot;,
            &quot;routingKey&quot;: &quot;090851&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090851&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;OLOMU APERAN MFB&quot;,
            &quot;routingKey&quot;: &quot;090852&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090852&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;AVVIC MFB&quot;,
            &quot;routingKey&quot;: &quot;090853&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090853&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;SPRINGVILLE MFB&quot;,
            &quot;routingKey&quot;: &quot;090786&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090786&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;PENTECOST MFB&quot;,
            &quot;routingKey&quot;: &quot;090861&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090861&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BAIGE MFB&quot;,
            &quot;routingKey&quot;: &quot;090862&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090862&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;KOINS MFB&quot;,
            &quot;routingKey&quot;: &quot;090839&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090839&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;BORGU MFB&quot;,
            &quot;routingKey&quot;: &quot;090395&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090395&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;ASPIRE MORTGAGE BANK&quot;,
            &quot;routingKey&quot;: &quot;070033&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;070033&quot;,
            &quot;categoryId&quot;: &quot;7&quot;,
            &quot;nubanCode&quot;: null
        },
        {
            &quot;name&quot;: &quot;INDULGE MICROFINANCE BANK&quot;,
            &quot;routingKey&quot;: &quot;090772&quot;,
            &quot;logoImage&quot;: null,
            &quot;bankCode&quot;: &quot;090772&quot;,
            &quot;categoryId&quot;: &quot;9&quot;,
            &quot;nubanCode&quot;: null
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-transfers-banks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-transfers-banks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-transfers-banks"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-transfers-banks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-transfers-banks">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-transfers-banks" data-method="GET"
      data-path="api/v1/transfers/banks"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-transfers-banks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-transfers-banks"
                    onclick="tryItOut('GETapi-v1-transfers-banks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-transfers-banks"
                    onclick="cancelTryOut('GETapi-v1-transfers-banks');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-transfers-banks"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/transfers/banks</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-transfers-banks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-transfers-banks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-transfers-name-enquiry">POST api/v1/transfers/name-enquiry</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-transfers-name-enquiry">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://app.clientsaccount.online/api/v1/transfers/name-enquiry" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"accountNumber\": \"497663666622\",
    \"bankCode\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://app.clientsaccount.online/api/v1/transfers/name-enquiry"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "accountNumber": "497663666622",
    "bankCode": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-transfers-name-enquiry">
</span>
<span id="execution-results-POSTapi-v1-transfers-name-enquiry" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-transfers-name-enquiry"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-transfers-name-enquiry"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-transfers-name-enquiry" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-transfers-name-enquiry">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-transfers-name-enquiry" data-method="POST"
      data-path="api/v1/transfers/name-enquiry"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-transfers-name-enquiry', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-transfers-name-enquiry"
                    onclick="tryItOut('POSTapi-v1-transfers-name-enquiry');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-transfers-name-enquiry"
                    onclick="cancelTryOut('POSTapi-v1-transfers-name-enquiry');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-transfers-name-enquiry"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/transfers/name-enquiry</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-transfers-name-enquiry"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-transfers-name-enquiry"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>accountNumber</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="accountNumber"                data-endpoint="POSTapi-v1-transfers-name-enquiry"
               value="497663666622"
               data-component="body">
    <br>
<p>Must be between 10 and 12 digits. Example: <code>497663666622</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bankCode</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bankCode"                data-endpoint="POSTapi-v1-transfers-name-enquiry"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-transfers">POST api/v1/transfers</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-transfers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://app.clientsaccount.online/api/v1/transfers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"debitAccountNumber\": \"497663666622\",
    \"creditAccountNumber\": \"497663666622\",
    \"creditBankCode\": \"consequatur\",
    \"amount\": 45,
    \"narration\": \"consequatur\",
    \"sessionId\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://app.clientsaccount.online/api/v1/transfers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "debitAccountNumber": "497663666622",
    "creditAccountNumber": "497663666622",
    "creditBankCode": "consequatur",
    "amount": 45,
    "narration": "consequatur",
    "sessionId": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-transfers">
</span>
<span id="execution-results-POSTapi-v1-transfers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-transfers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-transfers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-transfers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-transfers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-transfers" data-method="POST"
      data-path="api/v1/transfers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-transfers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-transfers"
                    onclick="tryItOut('POSTapi-v1-transfers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-transfers"
                    onclick="cancelTryOut('POSTapi-v1-transfers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-transfers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/transfers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-transfers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-transfers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>debitAccountNumber</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="debitAccountNumber"                data-endpoint="POSTapi-v1-transfers"
               value="497663666622"
               data-component="body">
    <br>
<p>Must be between 10 and 12 digits. Example: <code>497663666622</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>creditAccountNumber</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="creditAccountNumber"                data-endpoint="POSTapi-v1-transfers"
               value="497663666622"
               data-component="body">
    <br>
<p>Must be between 10 and 12 digits. Example: <code>497663666622</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>creditBankCode</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="creditBankCode"                data-endpoint="POSTapi-v1-transfers"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>amount</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="amount"                data-endpoint="POSTapi-v1-transfers"
               value="45"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>45</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>narration</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="narration"                data-endpoint="POSTapi-v1-transfers"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sessionId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="sessionId"                data-endpoint="POSTapi-v1-transfers"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
