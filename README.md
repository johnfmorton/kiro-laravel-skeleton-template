# Kiro + Laravel Skeleton Template

Welcome to the Kiro + Laravel Skeleton Template.

## Introduction

This repository is a fully-formed Laravel starter built from the experience of creating a real-world application with Kiro. Kiro provides a strong foundation for beginning any project, but  the steering documents and build-system structure included in this template provide a production-ready workspace to get your project started on the right foot. You don't have to fuss with the toolkit. You just start building.

You start your project with a complete development environment powered by DDEV, a working Vite setup with hot-module reloading, and a set of guiding documents that help shape conventions, workflows, and team collaboration from day one. Using this template saves at least an hour of initial setup time compared to assembling all of these pieces manually. It provides a consistent, fast, and opinionated starting point so you can focus on building features instead of wiring the project together.

## Features

* Laravel Ready: Comes pre-configured with a complete Laravel setup tailored for local development using DDEV.
* Vite Integration: Includes a Vite build process with hot module reloading, making front-end development smooth and efficient.
* Kiro Specs: Comes with highly tuned Kiro spec documents to ensure your code is human-readable and well-structured from the start.
* Makefile Included: Start your project simply by running make dev for an easy, no-fuss development experience.

## DDEV Requirements

Since the project uses DDEV for local enviroment of your Laravel project, you'll need to reference the [DDEV getting started section](https://ddev.com/get-started/) of the documenation. You'll find instructions for Mac, Windows and Linux. Basically, you'll need to be able to install Docker images, and, depending on your platform, a way for local URLs to resolve.

### Automatic DDEV Validation

This project includes automatic DDEV installation checks that run before any DDEV-dependent commands. When you run `make setup`, `make dev`, or `make build`, the system will automatically verify that:

* DDEV is installed and available in your PATH
* DDEV can execute commands successfully
* Docker is running and accessible to DDEV

If any issues are detected, you'll receive clear error messages with specific troubleshooting steps. This ensures you don't encounter cryptic errors during setup.

**Note**: The `make help` command does not require DDEV and will always work, even if DDEV is not installed.

## Quick Start

1. **Clone the repo**: `git clone <https://github.com/johnfmorton/kiro-laravel-skeleton.git> your-project-name`
2. **Navigate to the directory**: `cd your-project-name`
3. **Run initial setup**: `make setup` (automatically checks DDEV, then installs dependencies, generates app key, runs migrations, builds assets)
4. **Start development**: `make dev` (automatically checks DDEV, then launches browser, runs migrations, starts Vite dev server)

That's it! Your Laravel app will be running at the URL shown by DDEV (typically `https://your-project-name.ddev.site`).

**First-time users**: If you don't have DDEV installed, `make setup` will detect this and provide installation instructions with platform-specific commands.

## Daily Development

After initial setup, just run:

```bash
make dev      # Launch your development environment
```

## Troubleshooting

### DDEV Installation Issues

#### DDEV Not Found

If you see an error message indicating DDEV is not installed:

**Error Message:**
```
❌ ERROR: DDEV is not installed or not in your PATH
```

**Solution:**

1. Install DDEV using the official installation guide: <https://ddev.readthedocs.io/en/stable/users/install/>

2. Platform-specific quick install commands:
   * **macOS**: `brew install ddev/ddev/ddev`
   * **Windows**: `choco install ddev`
   * **Linux**: See the installation guide above for distribution-specific instructions

3. After installation, verify DDEV is working:
   ```bash
   ddev version
   ```

4. Run your original command again (e.g., `make setup`)

#### Docker Not Running

If DDEV is installed but Docker is not running:

**Error Message:**
```
❌ ERROR: DDEV is installed but cannot connect to Docker
```

**Solution:**

1. **Start Docker**:
   * **macOS/Windows**: Launch Docker Desktop from your Applications folder or system tray
   * **Linux**: Start the Docker daemon with `sudo systemctl start docker`

2. **Wait for Docker to fully start**: Check the Docker Desktop icon in your system tray - it should show "Docker Desktop is running"

3. **Reset DDEV state**:
   ```bash
   ddev poweroff
   ```

4. **Run your original command again** (e.g., `make setup`)

**If issues persist:**

* Restart Docker completely (quit and relaunch Docker Desktop)
* Run DDEV diagnostics:
  ```bash
  ddev debug test
  ```
* Check Docker is running:
  ```bash
  docker ps
  ```

#### DDEV Version Issues

If you encounter errors related to DDEV functionality:

1. Check your DDEV version:
   ```bash
   ddev version
   ```

2. Update DDEV to the latest version:
   * **macOS**: `brew upgrade ddev`
   * **Windows**: `choco upgrade ddev`
   * **Linux**: Follow the upgrade instructions in the DDEV documentation

3. After upgrading, restart your project:
   ```bash
   ddev restart
   ```

### Advanced: Skipping DDEV Checks

For advanced users who need to bypass the automatic DDEV checks (not recommended for normal development):

You can run the underlying commands directly without the Makefile:

```bash
# Instead of: make setup
ddev composer install
ddev artisan key:generate
ddev artisan migrate
ddev npm install
ddev npm run build

# Instead of: make dev
ddev start
ddev artisan migrate
ddev npm run dev
```

**Warning**: Skipping checks means you won't receive helpful error messages if DDEV or Docker are not properly configured.

### Manual DDEV Check

You can manually verify your DDEV installation at any time:

```bash
make check-ddev
```

This will display:
* Whether DDEV is installed
* The installed DDEV version
* Whether Docker is accessible
* Any configuration issues

## Testing

### Makefile Tests

The project includes automated tests for the DDEV installation check functionality. These tests verify that the Makefile properly validates DDEV installation and provides helpful error messages.

To run the Makefile tests:

```bash
./tests/makefile-tests.sh
```

The test suite validates:
- DDEV not found scenario with proper error messages
- DDEV functional scenario with success messages
- Dependency chain verification (setup, dev, build targets)
- Help target independence from DDEV checks
- Error message content and formatting
- ANSI color code presence
- Sequential check ordering

All tests should pass on a properly configured system. If tests fail, review the output for specific failure reasons.

## Contribution and License

This project is open source under the MIT License. We welcome contributions and suggestions!
