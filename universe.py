import sys
from terminal import *

def main():
	(width, height) = get_term_size()
	grid = [(width- 5)*(0)
	for i in range(height-5)]


	update_screen(grid)

	read_initial_conf(grid)

	prompt = ('ITER %d: Type anything to continue, the number of steps to '
			'perform for quit to exit): ')
	iter_step = 1
	update_screen(grid)
	while True:
		# Wait for user
		play = raw_input('%s' % (prompt % iter_step))
		if play == 'quit':
			break
		try:
			batch_steps = int(play)
		except:
			batch_steps = 1
			pass
		for i in range(batch_steps):
			# Define auxillary grid matrix
			new_grid = [len(grid[0]*[0])for i in range(len(grid))]
			# Update grid
			next_step(grid, new_grid)
			grid, new_grid = new_grid, grid
			update_screen(grid)
			iter_step += batch_steps

def next_step(grid, new_grid):
	""" next_step: Computes the grid's next step and stores it in the list 
	new_grid. The latter needing to have been previously defined
	"""
	# For each column in grid
	for x in range(0, len(grid[0])):
		# Inerate through each line in grid
		for y in range(0, len(grid)):
			# Count live cells around (x, y)
			live_neighbors = healthy_neighbors(x, y, grid)
			# Apply Game of Life's rules
			if grid [y][x]:
				if live_neighbors < 2 or live_neighbors > 3:
					new_grid[y][x] = 0
				else:
					new_grid[y][x] = grid[y][x]
			else:
				if live_neighbors == 3:
					new_grid[y][x] = 1









