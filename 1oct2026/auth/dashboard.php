<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f5f7f3">
    <title>Overview | Fieldnote</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="app-shell">
        <aside class="sidebar" aria-label="Main navigation">
            <a class="brand" href="#overview" aria-label="Fieldnote home">
                <span class="brand-mark" aria-hidden="true">F</span>
                <span>fieldnote</span>
            </a>

            <div class="nav-label">Workspace</div>
            <nav class="main-nav">
                <a class="nav-link active" href="#overview" aria-current="page">
                    <span class="nav-symbol" aria-hidden="true">◫</span> Overview
                </a>
                <a class="nav-link" href="#members">
                    <span class="nav-symbol" aria-hidden="true">◉</span> Members
                </a>
                <a class="nav-link" href="#activity">
                    <span class="nav-symbol" aria-hidden="true">↗</span> Activity
                </a>
                <a class="nav-link" href="#reports">
                    <span class="nav-symbol" aria-hidden="true">▤</span> Reports
                </a>
            </nav>

            <div class="sidebar-bottom">
                <div class="help-note">
                    <span class="help-dot" aria-hidden="true"></span>
                    <div>
                        <strong>All systems normal</strong>
                        <span>Your workspace is up to date.</span>
                    </div>
                </div>
                <a class="account-link" href="index.php">
                    <span class="avatar avatar-dark" aria-hidden="true">A</span>
                    <span class="account-copy"><strong>Admin account</strong><small>Sign out</small></span>
                    <span class="account-arrow" aria-hidden="true">↗</span>
                </a>
            </div>
        </aside>

        <main class="main-content" id="overview">
            <header class="topbar">
                <div class="breadcrumbs"><span>Workspace</span><span aria-hidden="true">/</span><strong>Overview</strong></div>
                <div class="topbar-right">
                    <span class="demo-badge"><span aria-hidden="true"></span> Demo data</span>
                    <span class="avatar avatar-green" aria-label="Admin account">A</span>
                </div>
            </header>

            <div class="page-content">
                <section class="page-heading" aria-labelledby="page-title">
                    <div>
                        <p class="eyebrow">THURSDAY, OCTOBER 1</p>
                        <h1 id="page-title">Good morning, Admin</h1>
                        <p class="page-subtitle">Here’s what’s happening across your workspace.</p>
                    </div>
                    <a class="primary-button" href="#members"><span aria-hidden="true">＋</span> Add member</a>
                </section>

                <section class="metrics" aria-label="Workspace summary">
                    <article class="metric-card">
                        <div class="metric-top"><span>Total members</span><span class="metric-icon mint" aria-hidden="true">◎</span></div>
                        <div class="metric-value">2,486</div>
                        <div class="metric-foot"><span class="trend-up">↗ 12.8%</span><span>vs. last month</span></div>
                    </article>
                    <article class="metric-card">
                        <div class="metric-top"><span>Active this week</span><span class="metric-icon peach" aria-hidden="true">◷</span></div>
                        <div class="metric-value">1,204</div>
                        <div class="metric-foot"><span class="trend-up">↗ 6.2%</span><span>vs. last week</span></div>
                    </article>
                    <article class="metric-card">
                        <div class="metric-top"><span>New this month</span><span class="metric-icon yellow" aria-hidden="true">＋</span></div>
                        <div class="metric-value">186</div>
                        <div class="metric-foot"><span class="trend-up">↗ 3.4%</span><span>vs. last month</span></div>
                    </article>
                    <article class="metric-card">
                        <div class="metric-top"><span>Pending review</span><span class="metric-icon lilac" aria-hidden="true">⌛</span></div>
                        <div class="metric-value">12</div>
                        <div class="metric-foot"><span class="pending-label">Needs attention</span></div>
                    </article>
                </section>

                <section class="content-grid" id="activity">
                    <article class="panel activity-panel" aria-labelledby="activity-title">
                        <div class="panel-heading">
                            <div>
                                <p class="eyebrow">MEMBER ENGAGEMENT</p>
                                <h2 id="activity-title">Activity overview</h2>
                            </div>
                            <span class="period-select">Last 7 days <span aria-hidden="true">⌄</span></span>
                        </div>
                        <div class="chart-summary"><strong>8,492</strong><span>member interactions</span><span class="trend-up">↗ 8.1%</span></div>
                        <div class="chart" role="img" aria-label="Bar chart showing member activity from Monday through Sunday, highest on Friday">
                            <div class="chart-guides" aria-hidden="true"><span>2k</span><span>1.5k</span><span>1k</span><span>500</span><span>0</span></div>
                            <div class="bar-area" aria-hidden="true">
                                <div class="bar-column"><span class="bar" style="--bar-height: 48%"></span><span class="day">Mon</span></div>
                                <div class="bar-column"><span class="bar" style="--bar-height: 66%"></span><span class="day">Tue</span></div>
                                <div class="bar-column"><span class="bar" style="--bar-height: 58%"></span><span class="day">Wed</span></div>
                                <div class="bar-column"><span class="bar" style="--bar-height: 78%"></span><span class="day">Thu</span></div>
                                <div class="bar-column"><span class="bar bar-highlight" style="--bar-height: 92%"></span><span class="day day-active">Fri</span></div>
                                <div class="bar-column"><span class="bar" style="--bar-height: 61%"></span><span class="day">Sat</span></div>
                                <div class="bar-column"><span class="bar" style="--bar-height: 38%"></span><span class="day">Sun</span></div>
                            </div>
                        </div>
                    </article>

                    <article class="panel source-panel" id="reports" aria-labelledby="source-title">
                        <div class="panel-heading">
                            <div>
                                <p class="eyebrow">WHERE THEY COME FROM</p>
                                <h2 id="source-title">Member sources</h2>
                            </div>
                            <a class="text-link" href="#reports">Details <span aria-hidden="true">→</span></a>
                        </div>
                        <div class="source-total"><strong>2,486</strong><span>total members</span></div>
                        <div class="source-track" role="img" aria-label="Sources: Direct 46%, Referral 32%, Social 22%">
                            <span class="source-segment direct"></span><span class="source-segment referral"></span><span class="source-segment social"></span>
                        </div>
                        <ul class="source-list">
                            <li><span class="source-name"><i class="source-dot direct-dot"></i>Direct</span><strong>46%</strong><span class="source-count">1,144</span></li>
                            <li><span class="source-name"><i class="source-dot referral-dot"></i>Referral</span><strong>32%</strong><span class="source-count">796</span></li>
                            <li><span class="source-name"><i class="source-dot social-dot"></i>Social</span><strong>22%</strong><span class="source-count">546</span></li>
                        </ul>
                    </article>
                </section>

                <section class="panel members-panel" id="members" aria-labelledby="members-title">
                    <div class="panel-heading members-heading">
                        <div>
                            <p class="eyebrow">YOUR COMMUNITY</p>
                            <h2 id="members-title">Recently added members</h2>
                        </div>
                        <a class="text-link" href="#members">View all <span aria-hidden="true">→</span></a>
                    </div>
                    <div class="table-wrap">
                        <table>
                            <thead><tr><th scope="col">Member</th><th scope="col">Joined</th><th scope="col">Source</th><th scope="col">Status</th><th scope="col"><span class="visually-hidden">Member details</span></th></tr></thead>
                            <tbody>
                                <tr><td><span class="member-cell"><span class="avatar avatar-coral">JM</span><span><strong>Jordan Miller</strong><small>jordan.miller@example.com</small></span></span></td><td>Oct 01, 2026</td><td>Referral</td><td><span class="status active-status">Active</span></td><td><a class="row-link" href="#members" aria-label="View Jordan Miller">↗</a></td></tr>
                                <tr><td><span class="member-cell"><span class="avatar avatar-yellow">SK</span><span><strong>Sam Kim</strong><small>sam.kim@example.com</small></span></span></td><td>Sep 30, 2026</td><td>Direct</td><td><span class="status active-status">Active</span></td><td><a class="row-link" href="#members" aria-label="View Sam Kim">↗</a></td></tr>
                                <tr><td><span class="member-cell"><span class="avatar avatar-blue">AR</span><span><strong>Alex Rivera</strong><small>alex.rivera@example.com</small></span></span></td><td>Sep 29, 2026</td><td>Social</td><td><span class="status review-status">Review</span></td><td><a class="row-link" href="#members" aria-label="View Alex Rivera">↗</a></td></tr>
                                <tr><td><span class="member-cell"><span class="avatar avatar-pink">TC</span><span><strong>Taylor Chen</strong><small>taylor.chen@example.com</small></span></span></td><td>Sep 28, 2026</td><td>Referral</td><td><span class="status active-status">Active</span></td><td><a class="row-link" href="#members" aria-label="View Taylor Chen">↗</a></td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="demo-caption">Example data shown for dashboard preview.</p>
                </section>
            </div>
        </main>
    </div>
</body>
</html>