## Before revert

```bash
git log --graph
```

<img width="876" alt="スクリーンショット 2024-02-03 12 33 37 2" src="https://github.com/shotatanakait/demo-git-revert/assets/40833446/00796002-31f0-4850-a793-15402516f8ab">

## Execute revert

```bash
git revert -m 1 [target_commit_hash]
```

## After revert

```bash
git log --graph
```

<img width="875" alt="スクリーンショット 2024-02-03 12 45 51" src="https://github.com/shotatanakait/demo-git-revert/assets/40833446/a052f9b1-e31a-4da5-9137-90a9b11a107f">
