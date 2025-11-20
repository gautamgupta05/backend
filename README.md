<h1>📌 Laravel 12 CMS – Backend API + Public Website</h1>

<p>
This is the <strong>Laravel 12 backend</strong> for the Mini CMS assignment.<br>
It provides:
</p>

<ul>
  <li>✔ REST APIs for the React Admin Panel</li>
  <li>✔ Public-facing website using Blade</li>
  <li>✔ CRUD for Posts, Pages, Media</li>
  <li>✔ Authentication</li>
  <li>✔ SEO URLs using slugs</li>
  <li>✔ File uploads using Storage</li>
  <li>✔ Global layout (header/footer)</li>
  <li>✔ Contact form</li>
</ul>

<hr>

<h2>🚀 Features Implemented</h2>

<h3>✅ <strong>Backend API (Laravel 12)</strong></h3>
<ul>
  <li>User Authentication (Login, Logout, Me)</li>
  <li>Posts CRUD + Image Upload</li>
  <li>Pages CRUD</li>
  <li>Media Manager Upload API</li>
  <li>Publish / Unpublish Post</li>
  <li>Form Request Validation</li>
  <li>API Resources</li>
  <li>Policies (optional)</li>
  <li>Slug generation</li>
  <li>Storage file handling (<code>/storage/app/public</code>)</li>
</ul>

<h3>📂 <strong>Models Included</strong></h3>
<ul>
  <li>User</li>
  <li>Post</li>
  <li>Page</li>
  <li>Media</li>
</ul>

<hr>

<h2>🌐 Public Website (Blade)</h2>

<p>All frontend pages are created as required:</p>

<h3>🏠 Homepage</h3>
<ul>
  <li>Shows latest posts</li>
  <li>SEO meta tags</li>
</ul>

<h3>📝 Blog Pages</h3>
<ul>
  <li><code>/blog</code> – Blog listing</li>
  <li><code>/blog/{slug}</code> – Single blog detail</li>
</ul>

<h3>📄 Static Pages</h3>
<ul>
  <li><code>/about</code></li>
  <li><code>/contact</code> (with form & email validation)</li>
  <li>Dynamic CMS Pages → <code>/{slug}</code></li>
</ul>

<h3>🎨 Global Layout</h3>
<ul>
  <li>Header</li>
  <li>Footer</li>
  <li>Tailwind CSS Integrated</li>
</ul>

<hr>

<h2>📡 API Endpoints</h2>

<table>
  <tr>
    <th>Feature</th>
    <th>Method & Endpoint</th>
  </tr>
  <tr>
    <td>Login</td>
    <td><code>POST /api/login</code></td>
  </tr>
  <tr>
    <td>Logout</td>
    <td><code>POST /api/logout</code></td>
  </tr>
  <tr>
    <td>Auth User</td>
    <td><code>GET /api/me</code></td>
  </tr>
  <tr>
    <td>Posts CRUD</td>
    <td><code>/api/posts</code></td>
  </tr>
  <tr>
    <td>Pages CRUD</td>
    <td><code>/api/pages</code></td>
  </tr>
  <tr>
    <td>Media Upload</td>
    <td><code>POST /api/media/upload</code></td>
  </tr>
  <tr>
    <td>Publish Toggle</td>
    <td><code>PATCH /api/posts/{id}/publish</code></td>
  </tr>
</table>

<hr>

<h2>🛠 Installation & Setup</h2>

<h3>1️⃣ Clone repository</h3>
<pre><code>git clone https://github.com/gautamgupta05/backend
cd backend
</code></pre>

<h3>2️⃣ Install dependencies</h3>
<pre><code>composer install
npm install
</code></pre>

<h3>3️⃣ Create environment file</h3>
<pre><code>cp .env.example .env
</code></pre>

<p><strong>Configure DB:</strong></p>
<p>You can also import the database from <code>database/cms_db.sql</code>.</p>
<pre><code>DB_DATABASE=cms_db
DB_USERNAME=root
DB_PASSWORD=
</code></pre>

<h3>4️⃣ Generate key</h3>
<pre><code>php artisan key:generate
</code></pre>

<h3>5️⃣ Run migrations</h3>
<pre><code>php artisan migrate
</code></pre>

<h3>6️⃣ Storage link</h3>
<pre><code>php artisan storage:link
</code></pre>

<h3>7️⃣ Start server</h3>

<p><strong>Backend:</strong></p>
<pre><code>php artisan serve
</code></pre>

<p><strong>Frontend assets:</strong></p>
<pre><code>npm run dev
</code></pre>

<hr>



<h2>📜 License</h2>
<p>This project is built for assignment purposes.</p>
