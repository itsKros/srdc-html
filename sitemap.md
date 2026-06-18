```mermaid
graph TD
    %% Main Project Node
    Root["AKMV Website Revamp"]
    style Root fill:#ffffff,stroke:#333333,stroke-width:1px

    %% Level 1: Primary Navigation (Red Blocks)
    Home["Home"]
    About["About AKMV"]
    Services["Services"]
    Success["Success Stories &<br>Credentials"]
    Live["Live<br>Opportunities"]
    Exec["Executive<br>Opportunities"]
    Insights["Insights & Media"]
    Contact["Contact<br>(button)"]

    style Home fill:#d9453b,stroke:none,color:#ffffff
    style About fill:#d9453b,stroke:none,color:#ffffff
    style Services fill:#d9453b,stroke:none,color:#ffffff
    style Success fill:#d9453b,stroke:none,color:#ffffff
    style Live fill:#d9453b,stroke:none,color:#ffffff
    style Exec fill:#d9453b,stroke:none,color:#ffffff
    style Insights fill:#d9453b,stroke:none,color:#ffffff
    style Contact fill:#d9453b,stroke:none,color:#ffffff

    %% Connecting Root to Top Level Navigation
    Root --> Home
    Root --> About
    Root --> Services
    Root --> Success
    Root --> Live
    Root --> Exec
    Root --> Insights
    Root --> Contact

    %% Level 2: Sub-menus (Green Blocks stacked vertically under Services)
    S1["Transaction Advisory &<br>Management Consulting"]
    S2["HR Advisory &<br>Talent Solutions"]
    S3["Staffing Services"]
    S4["Policy Advisory"]
    S5["Industrial Leasing<br>Services"]
    S6["CSR & Foundation<br>Initiatives"]

    style S1 fill:#7ee0a3,stroke:none,color:#000000
    style S2 fill:#7ee0a3,stroke:none,color:#000000
    style S3 fill:#7ee0a3,stroke:none,color:#000000
    style S4 fill:#7ee0a3,stroke:none,color:#000000
    style S5 fill:#7ee0a3,stroke:none,color:#000000
    style S6 fill:#7ee0a3,stroke:none,color:#000000

    %% Strict vertical chain under Services
    Services --> S1
    S1 --> S2
    S2 --> S3
    S3 --> S4
    S4 --> S5
    S5 --> S6

    %% Invisible links to keep the layout flat and grid-aligned
    Home --- About --- Services --- Success --- Live --- Exec --- Insights --- Contact
    linkStyle 8,9,10,11,12,13,14 stroke:none;
